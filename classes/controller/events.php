<?php
class Controller_Events extends Controller_DefaultTemplate {

	public function action_index(){
		$cache = Cache::instance('file');
		if (!$content = $cache->get("all_events")) {
			$events = new Model_Event();
			$eventsList = $events->getEventList();	
			$view = View::factory('pages/events_all');
			$view->eventsList = $eventsList;
			$view->title = "Ближайшие события Днепропетровска";
			$content = $view->render();

			$this->template->search_widget_second_page = View::factory('widgets/search_second_page');
			
			if (Kohana::PRODUCTION) {
				$cache->set("all_events", $content, Date::HOUR);
			}
		}

		$this->template->content = $content;
	}

	public function action_ticket(){
		include(APPPATH . "payu/PayU.cls.php");

		$eventId = $this->request->post('id_event');
		$ticketCount = $this->request->post('count');
		$date = Arr::get($this->request->post(), 'date', null);

		$events = new Model_Event();
		$event = $events->getItem($eventId, $date);

		$eventsName = (string) $event->title;
		$eventsCode = (int) $event->id_event;
		$eventsInfo = (string) HTML::clearShit($event->s_desc);
		$eventsPrice = (float) $event->price;
		$maxNumber = $event->max_count;
		$eventCommission = $event->commission;

		$totalPrice = $eventsPrice * (1 + ($eventCommission / 100));

		$option = HTML::get_payu_options();
		$user_id = null;

		if ($my = Cookie::get('anons_dp_ua')) {
			$my = json_decode($my);
			$user_id = (int) UTF8::substr($my[0], 32);
		}

    $forSend = array (
	    'ORDER_PNAME' => array( HTML::clearShit($eventsName) ), # Массив с названиями товаров
	    'ORDER_PCODE' => array( $eventsCode ), # Массив с кодами товаров
	    'ORDER_PINFO' => array( HTML::clearShit($eventsInfo) ), # Массив с описанием товаров
	    'ORDER_PRICE' => array( (float)$totalPrice ), # Массив с ценами
	    'ORDER_QTY' => array( $ticketCount ),  # Массив с колличеством каждого товара
	    'ORDER_VAT' => array( 0 ),  # Массив с указанием НДС для каждого товара
	    'ORDER_SHIPPING' => 0 , # Стоимость доставки
	    'PRICES_CURRENCY' => "UAH",  # Валюта мерчанта (Внимание! Должно соответствовать валюте мерчанта. )
	    'LANGUAGE' => "RU",
	    'BACK_REF' => BACK_REF,
	    'ORDER_REF' => $user_id,
	    //'PAY_METHOD' => 'CCVISAMC'
    );

		#Create form
	  $pay = PayU::getInst()->setOptions( $option )->setData( $forSend )->LU();
	  echo $pay;

    Log::instance()->add(Log::INFO,
    	"Start PAY -> user id: :user_id, pay form: :pay_form", 
    	array(
    		':user_id' => $user_id,
    		':pay_form' => $pay
    	)
    );
	}

	public function action_getEvents() {
		$events = new Model_Event();

		$from = explode('.', $this->request->post('from'));
		$from = "{$from[2]}-{$from[1]}-{$from[0]}";

		$to = explode('.', $this->request->post('to'));
		$to = "{$to[2]}-{$to[1]}-{$to[0]}";
		
		$events = $events->getEventsDates($from, $to);
		$resp = array();
		
		if ($events) {
			$resp = explode(',', $events);
		}
		
		echo json_encode($resp);
	}

	public function action_getAll() {
		$events = new Model_Event();
		$eventsList = $events->getAllRecomended($this->request->post('ids'));
		$config = Kohana::$config->load('anons_config');

		$html = "";
		 
		foreach ($eventsList as $event):
			$event = (object) $event;
			list($day, $month, $year, $time) = explode(' ', date('d n Y H:i', strtotime($event->date)));
			$eventHref = Route::url('event', array('controller' => 'events', 'action' => 'show', 'cat_alias' => $event->catAlias, 'item_alias' => $event->alias));
			$month = $config['month'][$month];
						
			$html .= '<div class="left main_event">
						<div class="comment-column clear">
							<div class="comment justify pointer" href="'.$eventHref.'" title="'.$event->title.'">
								<div class="who clear">
							  		<a href="'.$eventHref.'" title="'.$event->title.'">'.HTML::MegaImg('events/events', $event->image, 'img_small', 'float: left', $event->title, $config['EVENT_IMG_FRONT']).'</a>
							 		<p class="date"><span>'.$day.'</span> '.$month.' <span>'.$time.'</span></p>
							 		<p class="href"><a class="block" title="'.$event->title.'" href="'.$eventHref.'">'.$event->title.'</a></p>
							 		<u>'.(($event->place_dop_title) ? "{$event->place_dop_title}" : $event->place_title).'</u>
									'.HTML::cropstr($event->s_desc, 30).'
								</div>			    	
							</div>
						</div>
					</div>';	
		endforeach;
		
		echo $html;
	}


	public function action_getQuick() {
		$events = new Model_Event();
		$eventsList = $events->getQuick($this->request->post('what_search'));
		$config = Kohana::$config->load('anons_config');

		$html = "";
		 
		foreach ($eventsList as $event):
			$event = (object) $event;
			list($day, $month, $year, $time, $day_num) = explode(' ', date('d n Y H:i w', strtotime($event->date)));
			$eventHref = Route::url('event', array('controller' => 'events', 'action' => 'show', 'cat_alias' => $event->catAlias, 'item_alias' => $event->alias, 'date' => substr($event->date,0,10)));
			$month_str = $config['month'][$month];
			$day_str = $config['days_short'][$day_num];

			$html .= '<div class="left main_event">
						<div class="comment-column clear">
							<div class="comment justify pointer" href="'.$eventHref.'" title="'.$event->title.'">
								<div class="who clear">';
										if($event->price == 'Вход свободный'){ $html .= '<div class="free_price_title">вход свободный</div>'; }
							  		$html .= '<a href="'.$eventHref.'" title="'.$event->title.'">'.HTML::MegaImg('events/events', $event->image, 'img_small', 'float: left', $event->title, $config['EVENT_IMG_FRONT']).'</a>';
							 		
							 		$html .= (date("Y-m-d", strtotime($event->date)) == date("Y-m-d")) 
							 			? '<p class="date"><span>сегодня в</span> <span>'.$time.'</span></p>'
							 			: '<p class="date"><span>'.$day.'</span> '.$month_str.' <span>'.$time.'</span> '.$day_str.'</p>';

							 		$html .= '<p class="href"><a class="block" title="'.$event->title.'" href="'.$eventHref.'">'.$event->title.'</a></p>';
							 		if ($event->placeId != 330){
								 		$html .= '<u>'.(($event->place_dop_title) ? "{$event->place_dop_title}" : $event->place_title).'</u>';
								 	}
									$html .= HTML::cropstr($event->s_desc, 30).'
								</div>			    	
							</div>
						</div>
					</div>';	
		endforeach;
		
		echo $html;
	}

	public function action_day() {
		$cache = Cache::instance('file');
		$date = $this->param['item_alias'];

		if (!$eventsList = $cache->get("events_{$date}")) {
			$events = new Model_Event();
			$eventsList = $events->getEventList(1, $date);
			$view = View::factory('pages/events_all');
			$view->date = $date;
			$view->eventsList = $eventsList;

			list($day, $month, $year) = explode(' ', date('d n Y', strtotime($date)));
	        $config = Kohana::$config->load('anons_config.month');
	        $month = $config[$month];


	    $this->template->search_widget_second_page = View::factory('widgets/search_second_page');
			$view->title = "События Днепропетровска {$day} {$month}";
			$content = $view->render();

			if (Kohana::PRODUCTION) {
				$cache->set("events_{$date}", $event, Date::HOUR);
			}			
		}

		$this->template->content = $content;
	}

	public function action_show() {
		$cache = Cache::instance('file');
		$catId = SEO::getIdFromAlias($this->param['cat_alias'], 'Model_Event', 'getCatIdFromAlias');
		$itemId = SEO::getIdFromAlias($this->param['item_alias'], 'Model_Event', 'getItemIdFromAlias');

		$this->param['catId'] = $catId;
		$this->param['itemId'] = $itemId;

		if (!$event = $cache->get("event_{$itemId}")) {
			$events = new Model_Event();
			$date = (isset($this->param['date'])) ? $this->param['date'] : null;
			$event = $events->getItem($itemId, $date);
			if (Kohana::PRODUCTION) {
				$cache->set("event_{$itemId}", $event, Date::MONTH);
			}
		}

		list($day, $month, $year, $time) = explode(' ', date("d n Y H:i", strtotime($event->date)));
		$month = $this->config['month'][$month];
		$date = "{$day} {$month} {$year} {$time}";

		$this->seo = SEO::generic(
			(isset($event->k_title) && $event->k_title != '' ? $event->k_title : $event->title), 
			HTML::cropstr((isset($event->k_desc) && $event->k_desc != '' ? $event->k_desc : $event->s_desc)), 
			$event->k_keyw, 
			"events/events/{$event->image}", 
			$date
		);

		$view = View::factory('pages/event');
		$view->item = $event;
		$view->my_events_ids = array();
		$view->type_event = $events->getTypeEvent($event->id_event, $event->type);
		$view->count_users_go = $events->getCountUsersGo($itemId, $event->date);
		$view->likeEvents = $events->getLikeEvents($event->categories, $event->id_event);
		$view->show_pay_form = (USE_PAY_FORM && $event->has_eticket && $event->max_count > 0) ? true : false;

		$this->template->search_widget_second_page = View::factory('widgets/search_second_page');

		$my = false;
		if ($my = Cookie::get('anons_dp_ua')) {
			$my = json_decode($my);
			$user = new Model_User();
			$my_events_ids = $user->getMyEventsIds(UTF8::substr($my[0], 32), $event->date);
			$view->my_events_ids = explode(',', $my_events_ids);
		}

		if (isset($event->k_title)) { 
			$this->template->title = $event->k_title;
		}

		if (isset($event->k_desc)) {
			$this->template->description = $event->k_desc;
		}

		$view->is_logged = ($my) ? true : false;
		$this->template->content = $view->render();
	}

	public function action_search() {
		$model = new Model_Event();

		$text        = $this->request->post('text');
		$id_category = ($this->request->post('category')) ? implode(',', $this->request->post('category')) : false;
		$date_type   = $this->request->post('date_type');
		$date_from   = $this->request->post('date_from');
		$date_to     = $this->request->post('date_to');
		$time_from   = $this->request->post('time_from');
		$time_to     = $this->request->post('time_to');

		$events = $model->getEventsFromSearch($text, $id_category, $date_type, $date_from, $date_to, $time_from, $time_to);
		$view = View::factory('pages/events_search');
		$view->eventsList = $events;
		$view->text = $text;
		$view->from = $time_from;
		$view->to = $time_to;
		$view->title = "Поиск событий в Днепропетровске";
		$this->template->content = $view->render();
	}

	public function before() {
		parent::before();
		if (!$this->request->is_ajax()) {
			$active_menu = 'events';
			View::bind_global('active_menu', $active_menu);
			$this->param = $this->request->param();
			$this->config = Kohana::$config->load('anons_config');		
		}
	}

	public function after() {
		if (!$this->request->is_ajax() && isset($this->seo)) {
			$this->template->title       = $this->seo['title'];
			$this->template->description = $this->seo['description'];
			$this->template->keywords 	 = $this->seo['keywords'];
			$this->template->image 		   = $this->seo['image'];
			$this->template->date 			 = $this->seo['date'];			
		}
		parent::after();
	}
}
?>