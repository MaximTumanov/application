<?php
class Controller_DefaultTemplate extends Controller_Template {
	public $template = 'templates/default';

	public function before(){
		parent::before();

		if( ! $this->request->is_initial() or $this->request->is_ajax() or isset($_FILES['myfile'])) {
    	$this->auto_render = FALSE;
    }

		if($this->auto_render) {
			$this->template->title = 'Афиша Днепропетровска - Anons.dp.ua';
			$this->template->keywords = 'афиша Днепропетровска, афиша Днепропетровск, события, мероприятия, кинотеатры, места, фильмы, поиск событий';
			$this->template->description = 'Ищите, что посмотреть в Днепропетровске, или не знаете, куда пойти в Днепропетровске? Самая полная афиша Днепропетровска. Хорошо провести выходной в Днепропетровске.';
			$this->template->image = '';
			$this->template->date = '';
			$this->template->styles_header = array();
			$this->template->styles_footer = array();
			$this->template->scripts = array();
			$this->template->menu = '';
			$this->template->content = '';
			$this->template->footer = '';
			$this->template->debug = array();
			$this->template->use_vkontakte_comment = true;
			$this->template->use_search_widget_in_second_pages = true;

			$anons_config = Kohana::$config->load('anons_config');
			View::bind_global('anons_config', $anons_config);
			View::bind_global('use_vkontakte_comment', $this->template->use_vkontakte_comment);
			View::bind_global('use_search_widget_in_second_pages', $this->template->use_search_widget_in_second_pages);
			$this->getUser();
		}
	}

	private function getUser() {
		$id_user = null;
		$error = null;
		$this->param = $_POST;

		if (isset($this->param) && count($this->param)) {
			$data = array();
			if (isset($this->param['token'])) {

				if (!($domain = parse_url(URL::base(), PHP_URL_HOST))){
					$domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];
				};

				$s = Request::factory('http://ulogin.ru/token.php?token=' . $this->param['token'] . '&host=' . $domain)->execute()->body();
				
				$resp = json_decode($s, true);
		
				$q = "SELECT `id`, `name`, `login` FROM `jos_user` WHERE `uid` = '{$resp["uid"]}'  AND `network` = '{$resp["network"]}'";
				$user = DB::query(Database::SELECT, $q)->as_object()->execute()->current();

				if (!$user->id) {			
					list($lastid, $affected_rows) = DB::query(Database::INSERT, "INSERT INTO `jos_user` VALUES('', '{$resp["uid"]}', '{$resp["network"]}', '{$resp["first_name"]} {$resp["last_name"]}', '', '', '')")->execute();
				}		

				$data[0] = ($user->id) ? md5(time()."anons.dp.ua") . $user->id : md5(time()."anons.dp.ua") . $lastid;
				$data[1] = ($user->name) ? $user->name : "{$resp["first_name"]} {$resp["last_name"]}";
				
				Cookie::set('anons_dp_ua', json_encode($data), DATE::DAY);

			} elseif (isset($this->param['method']) && $this->param['method'] == 'login') {

				$login = $this->param['login'];
				$pass  = md5($this->param['pass']);
				
				$q = "SELECT `id`, `name`, `login` FROM `jos_user` WHERE `email` = '{$login}'  AND `pass` = '{$pass}'";
				$user = DB::query(Database::SELECT, $q)->as_object()->execute()->current();

				if ($user) {
					$data[0] = md5(time()."anons.dp.ua") . $user->id;
					$data[1] = ($user->name) ? $user->name : "{$user->login}";	
					Cookie::set('anons_dp_ua', json_encode($data), DATE::DAY);		
				} else {
					$error = 'Пользователь не найден!';
					View::bind_global('error', $error);
				}	
			} elseif (isset($this->param['method']) && $this->param['method'] == 'logout') {
				Cookie::delete('anons_dp_ua');
			} elseif (isset($this->param['method']) && $this->param['method'] == 'register') {
				$login = $this->param['login'];
				$pass = md5($this->param['pass']);

				if ($this->validEmail($login)) {
					list($lastid, $affected_rows) = DB::query(Database::INSERT, "INSERT INTO `jos_user` VALUES('', '', 'anons.dp.ua', '', '', '{$pass}', '{$login}')")->execute();

					$data = array(
						0 => md5(time()."anons.dp.ua") . $lastid,
						1 => $login
					);

					$user = new stdClass();	
					$user->id = $lastid;
				} else {
					$error = 'Пользователь с таким Email уже существует!';
					View::bind_global('error', $error);
				}

				if (!$error && ($user->id || $lastid)) {
					Cookie::set('anons_dp_ua', json_encode($data), DATE::DAY);
					$id_user = md5(($user->id) ? $user->id : $lastid);
				}
			}
			
		}
	}

	private function validEmail($email) {
		$res = true;
		if (DB::query(Database::SELECT, "SELECT `id` FROM `jos_user` WHERE `email` = '{$email}'")->execute()->get('id')) {
			$res = false;
		}
		return $res;
	}

	public function after(){
		if($this->auto_render){
			if (Kohana::PRODUCTION) {
				$this->template->styles_header = array(
					'css/main.css?' . filemtime('css/main.css') => 'screen',
					'css/calendar/calendar-system.css?' . filemtime('css/calendar/calendar-system.css') => 'screen',
					'css/ui/ui.css?' . filemtime('css/ui/ui.css') => 'screen',
          'css/slider.css?' . filemtime('css/slider.css') => 'screen'
				);
				$this->template->styles_footer = array();
				$this->template->scripts = array(
					'js/script.pack.js?' . filemtime('js/script.pack.js')
				);			
			} else {
				$this->template->styles_header = array(
					'css/main.css?' . filemtime('css/main.css') => 'screen',
					'css/calendar/calendar-system.css?' . filemtime('css/calendar/calendar-system.css') => 'screen',
					'css/ui/ui.css?' . filemtime('css/ui/ui.css') => 'screen',
          'css/slider.css?' . filemtime('css/slider.css') => 'screen'
				);
				$this->template->styles_footer = array();
				$this->template->scripts = array(
					/*'js/jquery.calendar.pack.js',
					'js/calendar-en.js',
					'js/jquery.cookie.js',
					'js/dialog.js',
					'js/jquery.highlight.js',
					'js/jquery.scroll_to.js',
					'js/jquery.ajax_load.js',
					'js/jquery.ui.js',
					'js/lazyload.js',
                                        'js/jquery.tooltip.js',
                                        'js/jquery.slider.js',
					'js/script.js'*/
					'js/script.pack.js?' . filemtime('js/script.pack.js'),
				);				
			}

			$this->template->menu = View::factory('widgets/menu')->render();
			$this->template->footer = View::factory('widgets/footer')->render();			
		}
		parent::after();
	}
}
?>