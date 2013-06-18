<?php
include(APPPATH . "payu/PayU.cls.php");

class Controller_Proccessing extends Controller_DefaultTemplate {

	public function action_ipn(){
		#TODO IP check
		$valid_ip = (true) ? true : false;

      Log::instance()->add(Log::INFO, 
      	"FULL POST RESPONSE -> post: :post", 
      	array(
      		':post' => json_encode($_POST)
      	)
      );

		# Read answer (IPN)
		if( $valid_ip ){
		  $payansewer = PayU::getInst()->setOptions( HTML::get_payu_options() )->IPN();
		  echo $payansewer;

      $qty = Arr::get($this->request->post(), 'IPN_QTY');
      $qty = $qty[0];

			$order_id = Arr::get($this->request->post(), 'ORDERNO');
			$user_id = Arr::get($this->request->post(), 'REFNOEXT');
			$payrefno = Arr::get($this->request->post(), 'REFNO');
			$id_event = 0;

			try {
		    $id_event = Arr::get($this->request->post(), 'IPN_PCODE');
	      $id_event = $id_event[0];

	      $model = new Model_Event();
	      $model->updateCount($id_event, $qty);
			} catch (Exception $e) {}

      $ticket_numbers = array();
      while($qty){
      	$ticket_numbers[] = HTML::createGuid($order_id);
      	$qty--;
      }

		  $transaction = ORM::factory('transaction')
		  	->where('payrefno', '=', $payrefno)
		  	->find();

		  if (!$transaction->id){
		  	$transaction = ORM::factory('transaction')
		  		->set('payrefno', $payrefno);
		  }

	  	$transaction
	  		->set('info', json_encode($this->request->post()))
		  	->set('order_id', $order_id)
		  	->set('status', 'payed')
		  	->set('ticket_numbers', implode('|', $ticket_numbers))
		  	->set('user_id', $user_id)
		  	->set('event_id', $id_event)
		  	->save();

      Log::instance()->add(Log::INFO, 
      	"IPN Response -> user id: :user_id, event id: :id_event, order id: :order_id, payrefno: :payrefno", 
      	array(
      		':user_id' => $user_id,
      		':id_event' => $id_event,
      		':order_id' => $order_id,
      		':payrefno' => $payrefno
      	)
      );
      exit;
		}
	}

	public function action_check(){
		if (!$this->request->is_ajax()) { return; }

		$payrefno = $this->request->post('payrefno');
		$transaction = ORM::factory('transaction')
			->where('payrefno', '=', $payrefno)
			->where('status', '=', 'payed')
			->find();

    Log::instance()->add(Log::INFO, 
    	"Check IPN Response -> payrefno: :payrefno, response: :response", 
    	array(
    		':payrefno' => $payrefno,
    		':response' => (isset($transaction->id)) ? "YES" : "NO"
    	)
    );

		if (!$transaction->id){
			echo json_encode( array('success' => false) );
		} else {
			$form = View::factory('proccessing/form');
			$form->payrefno = $payrefno;
			$form->order_id = $transaction->order_id;
			$all_info = json_decode($transaction->info);
			$form->user_email = $all_info->CUSTOMEREMAIL;

			echo json_encode( array(
				'success' => true, 
				'status' => $transaction->status, 
				'form' => $form->render() ) 
			);
		}
	}

	public function action_backref(){
		$pay = false;
		$payrefno = Arr::get($this->request->query(), 'payrefno', false);

		if (isset($_GET['ctrl'])){
			$pay = PayU::getInst()->setOptions( HTML::get_payu_options() )->checkBackRef();
			if ($pay){
				$model = ORM::factory('transaction');
				$transaction = $model->where('payrefno', '=', $this->request->query('payrefno'))->find();

				if ($this->request->query('payrefno') && $this->request->query('ctrl')){
					if (!$transaction->id){
						$model->set('secure', $this->request->query('3dsecure'))
							->values($this->request->query(), array('payrefno', 'date', 'ctrl'))
							->save();
					} else {
						$model->set('secure', $this->request->query('3dsecure'))
							->set('ctrl', $this->request->query('ctrl'))
							->set('date', $this->request->query('date'))
							->save();
					}
				}
			}
		}

    Log::instance()->add(Log::INFO, 
    	"Backref Response -> payrefno: :payrefno, pay: :pay, ctrl: :ctrl", 
    	array(
    		':payrefno' => $payrefno,
    		':pay' => ($pay) ? "YES" : "NO",
    		':ctrl' => isset($_GET['ctrl']) ? $_GET['ctrl'] : "NOT ISSET"
    	)
    );

		$view = View::factory('proccessing/backref');
		$view->real_request = $pay;
		$view->payrefno = $payrefno;
		$this->template->content = $view->render();
	}

	public function action_checkticket(){
		$number = Arr::get($this->request->query(), 'etkt', false);
		$result = array('success' => false, 'error_desc' => false, 'status' => 404);

		if ($number){
			$number_data = ORM::factory('number')->where('number', '=', $number)->find();
			if($number_data->id){
				$result['error_desc'] = "The ticket number has already been used";
				$result['register_at'] = $number_data->date;
				$result['status'] = 409;
			} else {
				$trn = ORM::factory('transaction')
					->where('ticket_numbers', 'LIKE', "%{$number}%")
					->find();

				if($trn->id){
					$tkn_numbers = explode('|', $trn->ticket_numbers);
					
					if(in_array($number, $tkn_numbers)){
						$date = date("Y-m-d H:i:s");
						$result['success'] = true;
						$result['status'] = 200;
						$result['register_at'] = $date;
						ORM::factory('number')
							->set('number', $number)
							->set('date', $date)
							->save();
					} else {
						$result['error_desc'] = "Ticket number not found";					
					}
				} else {
					$result['error_desc'] = "Ticket number not found";
				}
			}
		} else {
			$result['error_desc'] = "Param 'etkt' not present";
			$result['status'] = 400;
		}

		echo json_encode($result);

    Log::instance()->add(Log::INFO, 
    	"Check Ticket Response -> number: :number, status: :status, register: :register_at", 
    	array(
    		':number' => $number,
    		':status' => $result['status'],
    		':register_at' => (isset($result['register_at'])) ? $result['register_at'] : "not register"
    	)
    );

		exit;
	}

	private function checkUserInfo(){
		$id_user = null;
		$data = json_decode(Cookie::get('anons_dp_ua'));
		if (isset($data) && isset($data[0])) {
			$id_user = (int) substr($data[0], 32);
		}

		return $id_user;
	}

	public function before(){
		parent::before();
		if (!$this->request->is_ajax()) {
			$this->param = $this->request->param();
			$this->config = Kohana::$config->load('anons_config');
			$active_menu = 'index';
			View::bind_global('active_menu', $active_menu);
		}
	}

	public function after(){
		parent::after();
	}

}
?>