<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Dashboard extends CI_Controller
{
	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	public function index(){

		if (!$this->ion_auth->logged_in()){

			// redirect them to the login page
			redirect('auth/login', 'refresh');

			
		}elseif(!$this->ion_auth->is_admin()){
			if($this->ion_auth->get_user_id()==5){
				$data['stream']['instrument_token'] = $this->db->query("SELECT * FROM mytable WHERE admin_access = 1")->result();
				$this->load->view("streamer/layout/header");
				$this->load->view("streamer/layout/sidebar");
				$this->load->view("stream",$data);
				$this->load->view("streamer/layout/footer");
				
			}else{
			    $data['title'] = "KiteConnect | Home";
				$this->load->view("client/layout/header");
				$this->load->view("client/layout/sidebar");
				$data['instrument_token'] = $this->db->query("SELECT * FROM mytable WHERE admin_access = 1 AND user_access = 1 ")->result();
				$this->load->view("client/dash" ,$data);
				$this->load->view("client/layout/footer");
			}

		}else{
		    $data['title'] = "KiteConnect | Home";
			$this->load->view("client/layout/header");
			$this->load->view("client/layout/sidebar");
			$data['instrument_token'] = $this->db->query("SELECT * FROM mytable WHERE admin_access = 1 AND user_access = 1 ")->result();
			$this->load->view("admin/home",$data);
			$this->load->view("client/layout/footer");
		}

		
	}

	public function save_data_table(){
		$data['token'] = $this->input->post('instrument_token');
		$data['data_open'] = $this->input->post('ohlc[open]');
		$data['data_low'] = $this->input->post('ohlc[low]');
		$data['data_high'] = $this->input->post('ohlc[high]');
		$data['data_close'] = $this->input->post('ohlc[close]');
		$data['ltp'] = $this->input->post('last_price');
		$this->db->where('token',$data['token']);
		 if( $this->db->update('dashboard',$data))
	      {
	        return true;
	      }
	      else
	      {
	        return false;
	      }

		//echo json_encode($open);
	}
	public function sauda(){

		$token = $this->input->post('token');
		$mode = $this->input->post('mode');
		$price = $this->input->post('price');
		$qty = $this->input->post('qty');
		$exc = $this->input->post('exc');

		$exc = str_replace("(","",$exc);
		$exc = str_replace(")","",$exc);

		$time = date("Y-m-d H:i:s");

		$client = $this->ion_auth->get_user_id();

		if($mode=="BUY"){
			$query = ("INSERT INTO `orders`(`market`, `script`, `client_id`, `amount`, `qty`, `trade_time`, `broker_id`, `Total`, `Net`, `Show`, `type_flag`, `show_ord`) VALUES ('".$exc."',".$token.",".$client.",".$price.",".$qty.",'".$time."','1',".($price*$qty).",'','','','')");
		}else{
			$query = ("INSERT INTO `orders`(`market`, `script`, `client_id`, `amount`, `qty`, `trade_time`, `broker_id`, `Total`, `Net`, `Show`, `type_flag`, `show_ord`) VALUES ('".$exc."',".$token.",".$client.",".$price.",'-".$qty."','".$time."','1',".($price*$qty).",'','','','')");

		}
		
		$temp = $this->db->query($query);
		return true;
		// redirect('Client', 'refresh');

		// echo ($token);
		// exit();

		// $data['SCRIP'] = $this->input->post('src');
		// if($mode=='SELL'){
		// 	$data['QTY'] = ($this->input->post('qty')-($this->input->post('qty')*2));
		// }else{
		// 	$data['QTY'] = ($this->input->post('qty'));			
		// }
		// $data['PRICE'] = $this->input->post('pr');
		// $data['EXCH'] = 'NSE_FO';
		// $data['CLIENT'] = 'admin';
		// $data['DATE'] =date('Y-m-d H:i:s');
		// $data['TIME'] = date('Y-m-d H:i:s');

		

		// if(!$this->db->insert('orders',$data)){
		// 	echo "Error In Dealing";
		// }


	}

	public function limit_trade(){

		$token = $this->input->post('token');
		$mode = $this->input->post('mode');
		$price = $this->input->post('price');
		$qty = $this->input->post('qty');
		$exc = $this->input->post('exc');

		$exc = str_replace("(","",$exc);
		$exc = str_replace(")","",$exc);

		$time = date("Y-m-d H:i:s");

		$client = $this->ion_auth->get_user_id();

		if($mode=="BUY"){
			$query = ("INSERT INTO `orders2`(`market`, `script`, `client_id`, `amount`, `qty`, `trade_time`, `broker_id`, `Total`, `Net`, `Show`, `type_flag`, `show_ord`) VALUES ('".$exc."',".$token.",".$client.",".$price.",".$qty.",'".$time."','1',".($price*$qty).",'','','','')");
		}else{
			$query = ("INSERT INTO `orders2`(`market`, `script`, `client_id`, `amount`, `qty`, `trade_time`, `broker_id`, `Total`, `Net`, `Show`, `type_flag`, `show_ord`) VALUES ('".$exc."',".$token.",".$client.",".$price.",'-".$qty."','".$time."','1',".($price*$qty).",'','','','')");

		}
		
		$temp = $this->db->query($query);
		return true;

	}
	public function streaming(){

				$term = $this->input->get('search');
				// $inst_type = $this->input->get('inst_type');
				// $exchange = $this->input->get('exchange');
				$segment = $this->input->get('segm');
			if($this->ion_auth->get_user_id()==5){
				$query = "SELECT * FROM mytable WHERE tradingsymbol LIKE '%".$term."%' AND segment LIKE '".$segment."' LIMIT 25 ";
				$data = $this->db->query($query)->result();
				print_r(json_encode($data));
			}elseif($this->ion_auth->get_user_id()==1){
				$query = "SELECT * FROM mytable WHERE tradingsymbol LIKE '%".$term."%' AND admin_access = '1' AND instrument_type LIKE '".$inst_type."' AND exchange LIKE '".$exchange."' AND segment LIKE '".$segment."'   LIMIT 25 ";
				$data = $this->db->query($query)->result();
				print_r(json_encode($data));
			}else{
				$query = "SELECT * FROM mytable WHERE admin_access = 1 AND tradingsymbol LIKE '%".$term."%' LIMIT 10 ";
				$data = $this->db->query($query)->result();
				print_r(json_encode($data));
			}
	}

	public function streaming_add(){

			// print_r($this->ion_auth->get_user_id());
			// exit();

			if($this->ion_auth->get_user_id()==5){
				$tok = $this->input->post('id');
				// $query = "UPDATE `mytable` SET admin_access = 1  WHERE instrument_token = ".$tok." LIMIT 10 ";
				// $data = $this->db->query($query);

				$this->db->set('admin_access', '1');
				$this->db->where('instrument_token', $tok);
				$this->db->update('mytable'); 
				
			}elseif($this->ion_auth->get_user_id()==1){
				$tok = $this->input->post('id');
				$query = "UPDATE `mytable` SET user_access = 1  WHERE instrument_token = ".$tok." LIMIT 10 ";
				$data = $this->db->query($query)->result();
				
			}else{
				$tok = $this->input->post('id');
				$this->db->set('user_access', '1');
				$this->db->where('instrument_token', $tok);
				$this->db->update('mytable'); 
				// $query = "SELECT * FROM mytable WHERE user_access = 1 AND tradingsymbol LIKE '%".$term."%' LIMIT 10 ";
				// $data = $this->db->query($query)->result();
				
			}
		$tok = $this->input->post('id');
		print_r(json_encode($tok));

	}

	public function ref_strem(){
		
				// $query = "SELECT instrument_token FROM mytable WHERE admin_access = 1 ";
				$query = "SELECT * FROM watch_list WHERE client_id = 8 ";
				$data = $this->db->query($query)->result();
				$inst = json_decode($data[0]->list);
				$inst2 = json_decode($data[0]->list2);
				$token_values = array();
				foreach ($inst->instrument_token as $d) {
					$token_values[]['instrument_token'] = $d;
				}

				foreach ($inst2->instrument_token as $d) {
					$token_values[]['instrument_token'] = $d;
				}
                // $data = json_decode($data,true);
				print_r(json_encode($token_values));
		
	}


}