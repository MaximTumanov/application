<?php
class Controller_Films extends Controller_DefaultTemplate {

	public function action_index(){
		$cache = Cache::instance('file');

		if (!$content = $cache->get("all_films")) {
			$films = new Model_Films();
			$filmsList = $films->getFilmList();
            $cinema = $films->getCinemaAll();
            //$xhref = $films->getXhrefAll();
            //var_export($cinema);
			$view = View::factory('pages/films_all');
			$view->filmsList = $filmsList;
            $view->cinema = $cinema;
            $time = $films->getTimeAll();
            
            $view->filmsTime = $time;
			$view->title = "Фильмы в Днепропетровске";
			$content = $view->render();

			if (Kohana::PRODUCTION) {
				$cache->set("all_films", $content, Date::HOUR);
			}
		}
		
		$this->template->content = $content;
	}

	public function action_show() {
		$cache = Cache::instance('file');

		$itemId = SEO::getIdFromAlias($this->param['item_alias'], 'Model_Films', 'getItemIdFromAlias');

		$this->param['itemId'] = $itemId;

		if (!$film = $cache->get("films_{$itemId}")) {
			$films = new Model_Films();
			//$date = (isset($this->param['date'])) ? $this->param['date'] : null;
            $film = $films->getItem($itemId);
            $cinema = $films->getCinemaFilm($this->param['item_alias']);
            //var_export($cinema);
            $time = $films->getTimeAll();
			if (Kohana::PRODUCTION) {
				$cache->set("films_{$itemId}", $film);
			}
		}

		$this->seo = SEO::generic(
			(isset($film->k_title) && $film->k_title != '' ? $film->k_title : $film->title),
			HTML::cropstr((isset($film->k_desc) && $film->k_desc != '' ? $film->k_desc : $film->s_desc)),
            $film->k_keyw,
			"films/films/{$film->image}"
			//$date
		);

		$view = View::factory('pages/film');
		$view->item = $film;
        $view->relatedCinema = $cinema;
        $view->filmsTime = $time;

       // var_export($view->relatedCinema);

		if (isset($film->k_title)) {
			$this->template->title = $film->k_title;
		}

		if (isset($film->k_desc)) {
			$this->template->description = $film->k_desc;
		}

		$this->template->content = $view->render();
	}

	public function action_search() {

	}

	public function before() {
		parent::before();
		if (!$this->request->is_ajax()) {
			$active_menu = 'films';
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

		}
		parent::after();
	}
}
?>