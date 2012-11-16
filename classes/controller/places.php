<?php
class Controller_Places extends Controller_DefaultTemplate {

	public function action_index() {
		$cache = Cache::instance('file');

		if (!$content = $cache->get("all_places")) {
			$places = new Model_Place();
			$placesList = $places->getPlacesList();	
			$view = View::factory('pages/places_all');
			$view->placesList = $placesList;
			$view->letters = $places->getPlacesLetters();
			$view->title = "Места Днепропетровска";
			$content = $view->render();

			if (Kohana::PRODUCTION) {
				$cache->set("all_places", $content, Date::HOUR * 12);
			}
		}

		$this->template->content = $content;	
	}

	public function action_show() {
		$cache = Cache::instance('file');

		$itemId = SEO::getIdFromAlias($this->param['item_alias'], 'Model_Place', 'getItemIdFromAlias');
		$this->param['itemId'] = $itemId;

		if (!$place = $cache->get("place_{$itemId}")) {
			$places = new Model_Place();

			$place = $places->getItem($itemId);
			if (Kohana::PRODUCTION) {
				$cache->set("place_{$itemId}", $place, Date::MONTH);
			}
		}

		list($day, $month, $year, $time) = explode(' ', date("d n Y H:i"));
		$month = $this->config['month'][$month];
		$date = "{$day} {$month} {$year} {$time}";

		$this->seo = SEO::generic(
			(isset($place->k_title) && $place->k_title != '' ? $place->k_title : $place->title),
			HTML::cropstr((isset($place->k_desc) && $place->k_desc != '' ? $place->k_desc : $place->desc)),
			$place->k_keyw,
			"events/places/{$place->image}", 
			$date
		);

		$view = View::factory('pages/place');
		$view->item = $place;
		$view->my_places_ids = array();
		$view->count_users_like = $places->getCountUsersLike($itemId);
		$view->relatedEvents = $places->getRelatedEvents($itemId);
		$view->has_archive_events = $places->has_archive_events($itemId);

		if ($my = Cookie::get('anons_dp_ua')) {
			$my = json_decode($my);
			$user = new Model_User();
			$my_places_ids = $user->getMyPlacesIds(UTF8::substr($my[0], 32));
			$view->my_places_ids = explode(',', $my_places_ids);
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


	public function action_archive(){
		$model = new Model_Place();

		$itemId = SEO::getIdFromAlias($this->param['item_alias'], 'Model_Place', 'getItemIdFromAlias');

		$place = $model->getItem($itemId);

		$this->seo = SEO::generic(
			"Архив событий " . (isset($place->k_title) && $place->k_title != '' ? $place->k_title : $place->title),
			HTML::cropstr((isset($place->k_desc) && $place->k_desc != '' ? $place->k_desc : $place->desc)),
			$place->k_keyw,
			"events/places/{$place->image}"
		);

		$view = View::factory('pages/places_archive');
		$view->eventsList = $model->getArchiveEvents($itemId);
		$view->place = $place;
		$view->title = "{$place->title}";
		$this->template->content = $view->render();
	}

	public function before() {
		parent::before();
		if (!$this->request->is_ajax()) {
			$active_menu = 'places';
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
			$this->template->image 		 = $this->seo['image'];
			$this->template->date 		 = $this->seo['date'];			
		}
		parent::after();
	}
}
?>