<?php
class Controller_Page extends Controller_DefaultTemplate {

	public function action_static() {
		//$cache = Cache::instance('file');

		$page = $this->param['page'];
		$view = View::factory("static/{$page}");
		$content = $view->render();
		$this->template->content = $content;
	}

	public function before() {
		parent::before();
		if (!$this->request->is_ajax()) {
			$this->param = $this->request->param();
			$this->config = Kohana::$config->load('anons_config');	
			$active_menu = $this->param['page'];
			View::bind_global('active_menu', $active_menu);	
		}
	}

	public function after() {
		if (!$this->request->is_ajax()) {
			$this->template->title       = $this->config['the_best'];		
		}
		parent::after();
	}

}
?>