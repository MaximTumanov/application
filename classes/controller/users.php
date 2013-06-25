<?php
class Controller_Users extends Controller_DefaultTemplate {

	public function action_index() {
		$model = new Model_User();

		$id_user = $this->checkUserInfo();

		if(isset($_SERVER['HTTP_REFERER'])) {
			Cookie::set('referer', $_SERVER['HTTP_REFERER']);
		}

		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
			$this->template->content = $view->render();	
		} else {
			$this->request->redirect('/users/tickets');
		}
	}

	public function action_events(){
		$model = new Model_User();

		$id_user = $this->checkUserInfo();

		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
		} else {
			$view = View::factory('pages/user_events');
			$view->my_events = $model->getUserEvents($id_user);
			$view->user_info = $model->getUserInfo($id_user);
		}

		$this->template->content = $view->render();		
	}

	public function action_event(){
		$model = new Model_User();
		$data = json_decode(Cookie::get('anons_dp_ua'));
		$id_user = $this->checkUserInfo();

		$itemId = SEO::getIdFromAlias($this->param['item_alias'], 'Model_Event', 'getItemIdFromAlias');
		
		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
		} else {
			$placeModel = new Model_Place();
			$view = View::factory('pages/user_event');
			$view->my_data = $data;
			$view->user = $model->getUserInfo($id_user);
			$view->category = $model->getCategory();
			$view->place = $placeModel->getItem($view->user->id_place);
			if($itemId){
				$modelEvents = new Model_Event();
				$view->event = $modelEvents->getItem($itemId);
			}
			
		}

		$this->template->content = $view->render();		
	}

	public function action_eventsall(){
		$model = new Model_User();

		$id_user = $this->checkUserInfo();

		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
		} else {
			$view = View::factory('pages/user_eventsall');
			$view->my_events = $model->getUserEventsCreateUser($id_user);
			$view->user_info = $model->getUserInfo($id_user);
		}

		$this->template->content = $view->render();		
	}

	public function action_places(){
		$model = new Model_User();

		$id_user = $this->checkUserInfo();

		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
		} else {
			$view = View::factory('pages/user_places');
			$view->my_places = $model->getUserPlaces($id_user);
			$view->user_info = $model->getUserInfo($id_user);
			}

		$this->template->content = $view->render();		
	}

	public function action_addevent(){
		$model = new Model_User();
		$data = json_decode(Cookie::get('anons_dp_ua'));
		$id_user = $this->checkUserInfo();

		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
		} else {
			$placeModel = new Model_Place();
			$view = View::factory('pages/user_addevent');
			$view->my_data = $data;
			$view->user = $model->getUserInfo($id_user);
			$view->category = $model->getCategory();
			$view->place = $placeModel->getItem($view->user->id_place);
		}

		$this->template->content = $view->render();		
	}

	public function action_partners(){
		$model = new Model_User();
		$data = json_decode(Cookie::get('anons_dp_ua'));
		$id_user = $this->checkUserInfo();

		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
		} else {
			$placeModel = new Model_Place();
			$view = View::factory('pages/user_partners');
			$view->my_data = $data;
			$view->user = $model->getUserInfo($id_user);
			$view->category = $model->getCategory();
			$view->places = $placeModel->getPlacesList();
		}

		$this->template->content = $view->render();		
	}

	public function action_logout() {
		Cookie::delete('anons_dp_ua');
		Cookie::delete('referer');
		$this->request->redirect('/users');
	}	

	public function action_login() {
		$this->request->redirect('/users');
	}

	public function action_eventToList(){
		if ($this->request->is_ajax()) {
			$model = new Model_User();
			$id_event = $this->request->post('id_event');
			$id_user = UTF8::substr($this->request->post('id_user'), 32);
			$action = $this->request->post('action');
			$date = $this->request->post('date');

			if ($model->eventToList($id_event, $id_user, $date, $action)) {
				echo json_encode(array('error' => 0));
			} else {
				echo json_encode(array('error' => 1));
			}
		}
	}

	public function action_placeToList() {
		if ($this->request->is_ajax()) {
			$model = new Model_User();
			$id_place = $this->request->post('id_place');
			$id_user = UTF8::substr($this->request->post('id_user'), 32);
			$action = $this->request->post('action');

			if ($model->placeToList($id_place, $id_user, $action)) {
				echo json_encode(array('error' => 0));
			} else {
				echo json_encode(array('error' => 1));
			}
		}
	}

	public function action_upload() {
		if ($_FILES['myfile']) {
			sleep(2);
			$uploaddir = $this->config['upload_path'];
			$uploadfile = $uploaddir.basename($_FILES['myfile']['name']);
			move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile);
		}
	}

	public function action_getEventsForPlace() {
		if ($this->request->is_ajax()) {
			$model = new Model_Event();
			$events = $model->getEventsForPlace($this->request->post('id'));
			echo json_encode($events);
		}
	}

	public function action_addpartner(){
		$fio = $this->request->post('fio');
		$email = $this->request->post('email');
		$phone = $this->request->post('phone');
		$desc = $this->request->post('redactor_content');
		$id_place = $this->request->post('id_place');
		$vip = 0;
		$new = 1;
		$public = 0;

		$data = json_decode(Cookie::get('anons_dp_ua'));
		$id_user = (int) substr($data[0], 32);
		
		$query = DB::query(Database::UPDATE, "UPDATE `jos_user` SET 
			`fio`   = '{$fio}',
			`email`   = '{$email}',
			`phone`   = '{$phone}',
			`desc`    = '{$desc}',
			`new`    = '{$new}',
			`public`     = '{$public}',
			`id_place` = '{$id_place}'
		WHERE `id` = '{$id_user}'");
		$query->execute();
		$this->request->redirect('/users/partners?success=1');

	}

	public function action_add(){
		$id_user = $this->checkUserInfo();
		$type = $this->request->post('type');
		$title = addslashes($this->request->post('title'));
		$alias = UTF8::translit($title . "-" . time());
		$date = $this->request->post('date');
		$hour = $this->request->post('date_hour');
		$minut = $this->request->post('date_minut');
		$day = $this->request->post('day');
		$desc = addslashes($this->request->post('redactor_content'));
		$s_desc = HTML::cropstr(strip_tags($desc), 30);
		$id_place = $this->request->post('place_id');
		$image = $this->request->post('image');
		$date_from = $this->request->post('date_from');
		$date_to = $this->request->post('date_to');
		$category = explode(',', $this->request->post('category'));
		$without_moderation = $this->request->post('without_moderation');
		$published = ($without_moderation) ? 1 : 3;
		$price_event = $this->request->post('price_event');
		$id_event = $this->request->post('id_event');

		switch ($type) {
			case 1:
				$dates = new stdClass();
				$dates->date = $date;
				$dates->time = $hour . ':' . $minut;
				break;
			case 2:
				$dates = new stdClass();
				$dates->dateFrom  = $date_from;
				$dates->dateTo    = $date_to;
				$dates->day  = $day;
				$dates->time = $hour . ':' . $minut;
				break;
			case 3:
				$dates = new stdClass();
				$dates->dateFrom  = $date_from;
				$dates->dateTo    = $date_to;
				$dates->day  = $day;
				$dates->time = $hour . ':' . $minut;
				break;
			case 4:
				break;
			case 5:
				$dates = new stdClass();
				$dates->dateFrom  = $date_from;
				$dates->dateTo    = $date_to;
				$dates->time = $hour . ':' . $minut;
				break;
		}

		$vip = 0;
		$wtf = 0;
		$address = '';
		
		if(!$id_event){
			$q = "INSERT INTO `jos_events` VALUES('', '{$title}', '{$alias}', '{$image}', '{$s_desc}', '{$desc}', '{$address}', '{$type}', '{$vip}', '{$wtf}', '{$published}', '', '', '', '{$price_event}', '', '{$id_user}', '', '', '', '')";
			list($id_event, $affected_rows) = DB::query(Database::INSERT, $q)->execute();
		} else {
			$q = "UPDATE `jos_events` SET 
				`title` = '{$title}',
				`alias` = '{$alias}',
				`image` = '{$image}',
				`s_desc` = '{$s_desc}',
				`desc` = '{$desc}',
				`address` = '{$address}',
				`type` = '{$type}',
				`vip` = '{$vip}',
				`wtf` = '{$wtf}',
				`published` = '{$published}',
				`price` = '{$price_event}',
				`id_user` = '{$id_user}'
				WHERE `id_event` = '{$id_event}'
			";
			DB::query(Database::UPDATE, $q)->execute();
			DB::query(Database::DELETE, "DELETE FROM `jos_events_xref` WHERE `id_event` = '{$id_event}'")->execute();
		}

		foreach ($category as $key => $val) {
			DB::query(Database::INSERT, "INSERT INTO `jos_events_xref` VALUES('{$id_event}', '{$val}', '{$id_place}')")->execute();
		}
		
		$this->_updateDates($id_event, $type, $dates);
		$this->request->redirect('/users/addevent?success=1');
	}

	private function _updateDates($id_event, $type, $dates){
		DB::query(Database::DELETE, "DELETE FROM `jos_events_dates` WHERE `id_event` = '{$id_event}'")->execute();

		switch ($type) {
			case 1:
				DB::query(Database::INSERT, "INSERT INTO `jos_events_dates` VALUES('{$id_event}', '{$dates->date} {$dates->time}', '{$dates->time}', '', '3')")->execute();
				break;
			case 2:
				if ($dates->dateFrom) {
					DB::query(Database::INSERT, "INSERT INTO `jos_events_dates` VALUES('{$id_event}', '{$dates->dateFrom} {$dates->time}', '{$dates->time}', '{$dates->day}', '1')")->execute();			
				}
				
				if ($dates->dateTo) {
					DB::query(Database::INSERT, "INSERT INTO `jos_events_dates` VALUES('{$id_event}', '{$dates->dateTo} {$dates->time}', '{$dates->time}', '{$dates->day}', '2')")->execute();				
				}
				
				$this->_addPeriodWeek($id_event, $dates->time, $dates->dateFrom, $dates->dateTo, $dates->day);
				
				break;
			case 3:
				if ($dates->dateFrom) {
					DB::query(Database::INSERT, "INSERT INTO `jos_events_dates` VALUES('{$id_event}', '{$dates->dateFrom} {$dates->time}', '{$dates->time}', '{$dates->day}', '1')")->execute();				
				}
				
				if ($dates->dateTo) {
					DB::query(Database::INSERT, "INSERT INTO `jos_events_dates` VALUES('{$id_event}', '{$dates->dateTo} {$dates->time}', '{$dates->time}', '{$dates->day}', '2')")->execute();				
				}	

				$this->_addPeriodMonth($id_event, $dates->time, $dates->dateFrom, $dates->dateTo, $dates->day);
				
				break;
			case 4:
				break;
			case 5:
				if ($dates->dateFrom) {
					DB::query(Database::INSERT, "INSERT INTO `jos_events_dates` VALUES('{$id_event}', '{$dates->dateFrom} {$dates->time}', '{$dates->time}', '', '1')")->execute();			
				}
				
				if ($dates->dateTo) {
					DB::query(Database::INSERT, "INSERT INTO `jos_events_dates` VALUES('{$id_event}', '{$dates->dateTo} {$dates->time}', '{$dates->time}', '', '2')")->execute();					
				}
				
				$this->_addPeriodDay($id_event, $dates->time, $dates->dateFrom, $dates->dateTo);
				
				break;
		}
	}

	private function _addPeriodDay($id_event, $time, $from, $to) {
		$startdate = strtotime($from);
		$enddate   = strtotime($to);
		
		while($startdate <= $enddate) {  
			$date = date('Y-m-d', $startdate);
			DB::query(Database::INSERT, "INSERT INTO `jos_events_dates` VALUES('{$id_event}', '{$date} {$time}', '{$time}', '', '3')")->execute();
		   	$startdate += 86400; 
		}		
	}
	
	private function _addPeriodWeek($id_event, $time, $from, $to, $day) {
		$startdate = strtotime($from);
		$enddate   = strtotime($to);
		
		while($startdate <= $enddate) {  
			if(date('w', $startdate) == $day) {
				$date = date('Y-m-d', $startdate);
				DB::query(Database::INSERT, "INSERT INTO `jos_events_dates` VALUES('{$id_event}', '{$date} {$time}', '{$time}', '{$day}', '3')")->execute();
			}
		   	$startdate += 86400; 
		}		
	}
	
	private function _addPeriodMonth($id_event, $time, $from, $to, $day) {
		$startdate = strtotime($from);
		$enddate   = strtotime($to);

		while($startdate <= $enddate) {  
			if(date('d', $startdate) == $day) {
				break;
			}
		   	$startdate += 86400; 
		}
				
		while($startdate <= $enddate) {
			$date = date('Y-m-d', $startdate);
			DB::query(Database::INSERT, "INSERT INTO `jos_events_dates` VALUES('{$id_event}', '{$date} {$time}', '{$time}', '{$day}', '3')")->execute();
			$startdate = strtotime('+1 month', $startdate);			
		}		
	}

	private function checkUserInfo(){
		$id_user = null;
		$data = json_decode(Cookie::get('anons_dp_ua'));
		if (isset($data) && isset($data[0])) {
			$id_user = (int) substr($data[0], 32);
		}

		return $id_user;
	}


	/*ETICKETS*/
	public function action_tickets(){
		$user_model = new Model_User();
		$id_user = $this->checkUserInfo();

		$view = View::factory('pages/user_tickets');
		$view->my_tickets = ORM::factory('transaction')
			->where('user_id', '=', $id_user)
			->where('status', '=', 'payed')
			->order_by('order_id', 'DESC')
			->find_all();
		$view->user_info = $user_model->getUserInfo($id_user);
		$this->template->content = $view->render();
	}

	public function action_ticket(){
		list($order_id, $payrefno) = explode(':', $this->param['item_alias']);
		$id_user = $this->checkUserInfo();

		$user_email = Arr::get($this->request->post(), 'user_email', false);

		$view = View::factory('pages/not_found');

		if ($id_user){
			if ($order_id && $payrefno){
				$item = ORM::factory('transaction')
					->where('user_id', '=', $id_user)
					->where('payrefno', '=', $payrefno)
					->where('order_id', '=', $order_id)
					->find();

				if ($item->id){
					$all_info = json_decode($item->info);
					$id_event = (int) $all_info->IPN_PCODE[0];
					$ticket_numbers = explode('|', $item->ticket_numbers);

					$model = new Model_Event();
					$event = $model->getItem($id_event);
					list($day, $month, $year, $time) = explode(' ', date('d m Y H:i', strtotime($event->date)));

					$event->address = ($event->address) ? $event->address : $event->address_org;

					$info = array(
						'date' => "{$day}.{$month}.{$year}",
						'time' => "{$time}",
						'event_title' => $event->title,
						'place_title' => "{$event->placeTitle} ({$event->address})",
						'price' => (float) $event->price,
						'order_id' => $order_id
					);

					$this->generate_pdf($ticket_numbers, $info, $user_email);
					return true;
				} else {
					//echo "bad ID";
					$view->error_type = "bad_transaction";
				}
			} else {
				//echo "bad order_id or payrefno";
				$view->error_type = "bad_order";
			}
		} else {
			//echo "bad user ID";
			$view->error_type = "bad_user";
		}
		$view->tkt_number = $order_id;
		$view->payrefno = $payrefno;
		$this->template->content = $view->render();
	}

	private function generate_pdf($ticket_numbers, $info, $user_email = false){
		include_once(APPPATH . 'pdf_creator/mpdf.php');

		$mpdf = new mPDF('utf-8', 'A4', '8', '', 10, 10, 7, 7, 10, 10);
		$mpdf->charset_in = 'uft-8';
		$stylesheet = file_get_contents('./css/pdf.css');
		$mpdf->WriteHTML($stylesheet, 1);
		$mpdf->list_indent_first_level = 0;

		for($page = 0; $page < count($ticket_numbers); $page++ ){
			$view = View::factory('pages/eticket');
			$view->ticket_number = $ticket_numbers[$page];
			$view->info = $info;
			$html = $view->render();
 
			$mpdf->WriteHTML($html, 2);
			$mpdf->SetWatermarkText('ANONS.DP.UA');
			$mpdf->watermark_font = 'DejaVuSansCondensed';
			$mpdf->showWatermarkText = true;

			if ($page != count($ticket_numbers) - 1) $mpdf->AddPage();
		}

		if($user_email){
			$config = Kohana::$config->load('email');

			$to = $user_email;
			$subject = "Ваши билеты на событие {$info['event_title']}. Заказ номер №{$info['order_id']}";
			$from = 'no_reply@anons.dp.ua';
			$body = "
				<div>Доброго времени суток!</div>
				<div>&nbsp;</div>
				<div>Ваш заказ на событие <b>{$info['event_title']}</b> успешно оплачен. Напоминаем, что данное событие будет проходить
				{$info['date']} в {$info['time']}. Место проведения - {$info['place_title']}.</div>
				<div>&nbsp;</div>
				<div>Во вложении находятся электронные билеты, которые необходимо распечатать и предъявить при входе на мероприятие.</div>
				<div>Также билеты доступны и в <a href='http://anons.dp.ua/users'>личном кабинете</a></div>
				<div>&nbsp;</div>
				<div>В случае возникновения вопросов, пожалуйста, обращайтесь по адресу <a href='mailto:tickets@anons.dp.ua'>tickets@anons.dp.ua</a></div>
				<div>&nbsp;</div>
				<div>Спасибо, что выбрали Anons.dp.ua</div>
			";

			$tempFile = DOCROOT . '../tmp/order_' . $info['order_id'] . '.pdf';
			$mpdf->Output($tempFile, 'F');

			$swift = email::connect($config);
			$message = Swift_Message::newInstance();

			$message->setSubject($subject)
			      ->setFrom(array('tickets@anons.dp.ua' => 'Anons.dp.ua'))
			      ->setTo($to)
			      ->setBody($body) 
			      ->addPart($body, 'text/html') 
			      ->attach(Swift_Attachment::fromPath($tempFile));

			$swift->send($message);
		}
		$mpdf->Output("ticket_{$info['order_id']}.pdf", 'I');
		exit;
	}

	public function before() {
		parent::before();
		if (!$this->request->is_ajax()) {
			$active_menu = 'my';
			View::bind_global('active_menu', $active_menu);
			$this->param = $this->request->param();
			$this->config = Kohana::$config->load('anons_config');		
		}
	}

	public function after() {
		parent::after();
	}
}
?>