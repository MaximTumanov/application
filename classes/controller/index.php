<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_DefaultTemplate {

	public function action_index(){
		$active_menu = 'main';
		View::bind_global('active_menu', $active_menu);
		$cache = Cache::instance('file');

		$events = new Model_Event();

		$view = View::factory('pages/index');
		$view->eventList = $events->getIndexEvent();
		$date = date("m.d.Y");

		if (!$category = $cache->get("category_{$date}")) {
			$category_all = $events->getCategory();
      $category_active = $events->getActiveCategory();
			if (Kohana::PRODUCTION) {
				$cahce->set("category_{$date}", $category);				
			}
		}

		$view->widgets = array(
			'calendar' => View::factory('widgets/calendar'),
			'search' => View::factory('widgets/search', array('catList' => $category_all, 'catListActive' => $category_active))
		);

		$this->template->content = $view->render();
	}

} // End Welcome
