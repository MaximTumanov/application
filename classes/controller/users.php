<?php
class Controller_Users extends Controller_DefaultTemplate {

	public function action_index() {
		$model = new Model_User();

		$data = json_decode(Cookie::get('anons_dp_ua'));
		if (isset($data) && isset($data[0])) {
			$id_user = (int) substr($data[0], 32);
		}

		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
			$this->template->content = $view->render();	
		} else {
			$this->request->redirect('/users/events');
		}
	}

	public function action_events(){
		$model = new Model_User();

		$data = json_decode(Cookie::get('anons_dp_ua'));
		if (isset($data) && isset($data[0])) {
			$id_user = (int) substr($data[0], 32);
		}

		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
		} else {
			$view = View::factory('pages/user_events');
			$view->my_events = $model->getUserEvents($id_user);
			$view->user_info = $model->getUserInfo($id_user);
		}

		$this->template->content = $view->render();		
	}

	public function action_places(){
		$model = new Model_User();

		$data = json_decode(Cookie::get('anons_dp_ua'));
		if (isset($data) && isset($data[0])) {
			$id_user = (int) substr($data[0], 32);
		}

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
		if (isset($data) && isset($data[0])) {
			$id_user = (int) substr($data[0], 32);
		}

		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
		} else {
			$view = View::factory('pages/user_addevent');
			$view->my_data = $data;
			$view->user = $model->getUserInfo($id_user);
			$view->category = $model->getCategory();
		}

		$this->template->content = $view->render();		
	}

	public function action_partners(){
		$model = new Model_User();

		$data = json_decode(Cookie::get('anons_dp_ua'));
		if (isset($data) && isset($data[0])) {
			$id_user = (int) substr($data[0], 32);
		}

		if (!isset($id_user)) {
			$view = View::factory('pages/user_login');
		} else {
			$view = View::factory('pages/user_partners');
			$view->my_data = $data;
			$view->user = $model->getUserInfo($id_user);
			$view->category = $model->getCategory();
		}

		$this->template->content = $view->render();		
	}

	public function action_logout() {
		Cookie::delete('anons_dp_ua');
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
			$uploaddir = '/html/anons.local/www/images/sunny/events/events/';
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
		
		
		$name = $this->request->post('name');
		$email = $this->request->post('email');
		$phone = $this->request->post('phone');
		$desc = $this->request->post('redactor_content');
		$vip = 0;
		$new = 1;
		$public = 0;
		$this->request->redirect('/users/partners?success=1');

	}

	public function action_add(){
		$type = $this->request->post('type');
		$title = $this->request->post('title');
		$alias = UTF8::translit($title);
		$date = $this->request->post('date');
		$hour = $this->request->post('date_hour');
		$minut = $this->request->post('date_minut');
		$day = $this->request->post('day');
		$desc = $this->request->post('redactor_content');
		$s_desc = HTML::cropstr($desc, 30);
		$id_place = $this->request->post('place_id');
		$image = $this->request->post('image');
		$date_from = $this->request->post('date_from');
		$date_to = $this->request->post('date_to');
		$category = explode(',', $this->request->post('category'));

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
		$address = 0;
		$published = 0;

		list($id_event, $affected_rows) = DB::query(Database::INSERT, "INSERT INTO `jos_events` VALUES('', '{$title}', '{$alias}', '{$image}', '{$s_desc}', '{$desc}', '{$address}', '{$type}', '{$vip}', '{$wtf}', '{$published}')")->execute();
		
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