<?php
class Controller_Blog extends Controller_DefaultTemplate {

	public function action_index(){
		$cache = Cache::instance('file');
		$blogs = new Model_Blog();
		$blogList = $blogs->getBlogList();	
		$view = View::factory('pages/blog_all');
		$view->blogList = $blogList;
		$view->title = "Блог в большом городе";
		$content = $view->render();

		$this->template->content = $content;
	}

	public function action_show() {
		$cache = Cache::instance('file');
		$itemId = SEO::getIdFromAlias($this->param['item_alias'], 'Model_Blog', 'getItemIdFromAlias');
		$this->param['itemId'] = $itemId;
		if (!$blog = $cache->get("blog_{$itemId}")) {
			$blogs = new Model_Blog();
			$blog = $blogs->getItem($itemId);
			if (Kohana::PRODUCTION) {
				$cache->set("blog_{$itemId}", $blog, Date::MONTH);
			}
		}

		$this->seo = SEO::generic(
			(isset($blog->k_title) && $blog->k_title != '' ? $blog->k_title : $blog->title), 
			HTML::cropstr((isset($blog->k_desc) && $blog->k_desc != '' ? $blog->k_desc : $blog->s_desc)), 
			$blog->k_keyw, 
			null, 
			$blog->date
		);

		$view = View::factory('pages/blog');
		$view->item = $blog;

		if (isset($event->k_title)) { 
			$this->template->title = $event->k_title;
		}

		if (isset($event->k_desc)) {
			$this->template->description = $event->k_desc;
		}

		$this->template->content = $view->render();
	}

	public function before() {
		parent::before();
		if (!$this->request->is_ajax()) {
			$active_menu = 'blog';
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
		}
		parent::after();
	}
}
?>