<?php
class Controller_Cinema extends Controller_DefaultTemplate {

	public function action_index() {
		$cache = Cache::instance('file');

		if (!$content = $cache->get("all_cinema")) {
			$cinema = new Model_Cinema();
			$cinemaList = $cinema->getCinemaList();
			$view = View::factory('pages/cinema_all');
			$view->cinemaList = $cinemaList;
			$view->letters = $cinema->getCinemaLetters();
			$view->title = "Кинотеатры Днепропетровска";
			$content = $view->render();

			if (Kohana::PRODUCTION) {
				$cache->set("all_cinemas", $content, Date::HOUR * 12);
			}
		}

		$this->template->content = $content;	
	}

	public function action_show() {
		$cache = Cache::instance('file');
		$itemId = SEO::getIdFromAlias($this->param['item_alias'], 'Model_Cinema', 'getItemIdFromAlias');

		$this->param['itemId'] = $itemId;

		if (!$cinema = $cache->get("cinema_{$itemId}")) {
			$cinemas = new Model_Cinema();

            $cinema = $cinemas->getItem($itemId);
			if (Kohana::PRODUCTION) {
				$cache->set("cinema_{$itemId}", $cinema, Date::MONTH);
			}
		}

		list($day, $month, $year, $time) = explode(' ', date("d n Y H:i"));
		$month = $this->config['month'][$month];
		$date = "{$day} {$month} {$year} {$time}";

		$this->seo = SEO::generic($cinema->title, HTML::cropstr($cinema->desc), "films/cinema/{$cinema->image}", $date);

		$view = View::factory('pages/cinema');
		$view->item = $cinema;
		//$view->my_cinemas_ids = array();
		//$view->count_users_like = $cinemas->getCountUsersLike($itemId);
		//$view->relatedFilms = $cinemas->getRelatedFilms($itemId);

        $view->relatedFilms = $cinemas->getFilmsCinema($itemId);
        $view->filmsTime = $cinemas->getAllTime();

		if ($my = Cookie::get('anons_dp_ua')) {
			$my = json_decode($my);
			$user = new Model_User();
			//$my_cinemas_ids = $user->getMyCinemasIds(UTF8::substr($my[0], 32));
			//$view->my_cinemas_ids = explode(',', $my_cinemas_ids);
		}

		$this->template->content = $view->render();
	}

	public function action_search() {
		$model = new Model_Place();

		$text        = $this->request->post('text');
		$id_category = ($this->request->post('category')) ? implode(',', $this->request->post('category')) : false;

		$places = $model->getPlacesFromSearch($text, $id_category);
		$view = View::factory('pages/places_search');
		$view->placesList = $places;
		$view->text = $text;
		$this->template->content = $view->render();
	}

	public function before() {
		parent::before();
		if (!$this->request->is_ajax()) {
			$active_menu = 'cinema';
			View::bind_global('active_menu', $active_menu);
			$this->param = $this->request->param();
			$this->config = Kohana::$config->load('anons_config');
		}
	}

	public function after() {
		if (!$this->request->is_ajax() && isset($this->seo)) {
			$this->template->title       = $this->seo['title'];
			$this->template->description = $this->seo['description'];
			$this->template->image 		 = $this->seo['image'];
			$this->template->date 		 = $this->seo['date'];
		}
		parent::after();
	}
}
?>