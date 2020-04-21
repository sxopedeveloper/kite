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
				$this->load->view("client/layout/header");
				$this->load->view("client/layout/sidebar");
				$data['instrument_token'] = $this->db->query("SELECT * FROM mytable WHERE admin_access = 1 ")->result();
				$this->load->view("client/home" ,$data);
				$this->load->view("client/layout/footer");
			}

		}else{
			$this->load->view("client/layout/header");
			$this->load->view("client/layout/sidebar");
			$data['instrument_token'] = $this->db->query("SELECT * FROM mytable WHERE admin_access = 1 ")->result();
			$this->load->view("admin/home",$data);
			$this->load->view("client/layout/footer");
		}

		
	}


	public function key_gen(){
		if($this->ion_auth->get_user_id()==5){
			$this->load->view("streamer/layout/header");
			$this->load->view("streamer/layout/sidebar");
			$this->load->view("streamer/key");
			$this->load->view("streamer/layout/footer");
			
		}else{
				redirect('auth/login', 'refresh'); 
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

		$mode = $this->input->post('mode');

		$data['SCRIP'] = $this->input->post('src');
		if($mode=='SELL'){
			$data['QTY'] = ($this->input->post('qty')-($this->input->post('qty')*2));
		}else{
			$data['QTY'] = ($this->input->post('qty'));			
		}
		$data['PRICE'] = $this->input->post('pr');
		$data['EXCH'] = 'NSE_FO';
		$data['CLIENT'] = 'admin';
		$data['DATE'] =date('Y-m-d H:i:s');
		$data['TIME'] = date('Y-m-d H:i:s');
		if(!$this->db->insert('orders2',$data)){
			echo "Error In Dealing";
		}


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

	public function allocaltion(){

				$term = $this->input->get('search');
				// $segment = $this->input->get('segm');
			if($this->ion_auth->get_user_id()==1){
				$query = "SELECT * FROM mytable WHERE tradingsymbol LIKE '%".$term."%' AND admin_access = 1 LIMIT 25 ";
				$data = $this->db->query($query)->result();
				print_r(json_encode($data));
			}
	}

	public function streaming_add(){

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
				$query = "SELECT * FROM mytable WHERE user_access = 1 AND tradingsymbol LIKE '%".$term."%' LIMIT 10 ";
				$data = $this->db->query($query)->result();
				
			}
		$tok = $this->input->post('id');
		print_r(json_encode($tok));

	}

	public function ref_strem(){
		if($this->ion_auth->get_user_id()==5){
				$query = "SELECT instrument_token FROM mytable WHERE admin_access = 1";
				$data = $this->db->query($query)->result();
				print_r(json_encode($data));
			}elseif($this->ion_auth->get_user_id()==1){
				$query = "SELECT instrument_token FROM mytable WHERE admin_access = 1";
				$data = $this->db->query($query)->result();
				print_r(json_encode($data));
			}else{
				$query = "SELECT instrument_token FROM mytable WHERE admin_access = 1 ";
				$data = $this->db->query($query)->result();
				print_r(json_encode($data));
			}
	}

	public function bhavcopy(){

		if($this->ion_auth->get_user_id()==5){
			$this->load->view("streamer/layout/header");
			$this->load->view("streamer/layout/sidebar");
			$this->load->view("streamer/upload_file");
			$this->load->view("streamer/layout/footer");
		}
	}

	public function bhavcopy_upload(){

		$csvMimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
	    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
	        if(is_uploaded_file($_FILES['file']['tmp_name'])){
	            
	            //open uploaded csv file with read only mode
	            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
	            
	            // skip first line
	            // if your csv file have no heading, just comment the next line
	            fgetcsv($csvFile);
	            
	            //parse data from csv file line by line
	            while(($line = fgetcsv($csvFile)) !== FALSE){
	                //check whether member already exists in database with same email
	                $result = $this->db->get_where("member", array("email"=>$line[1]))->result();
	                if(count($result) > 0){
	                    //update member data
	                    $this->db->update("member", array("name"=>$line[0], "phone"=>$line[2], "created"=>$line[3], "status"=>$line[4]), array("email"=>$line[1]));
	                }else{
	                    //insert member data into database
	                    $this->db->insert("member", array("name"=>$line[0], "email"=>$line[1], "phone"=>$line[2], "created"=>$line[3], "status"=>$line[4]));
	                }
	            }
	            
	            //close opened csv file
	            fclose($csvFile);

	            $qstring["status"] = 'Success';
	        }else{
	            $qstring["status"] = 'Error';
	        }
	    }else{
	        $qstring["status"] = 'Invalid file';
	    }
	    
	    $this->load->view('bhavcopy',$qstring);
	


	}


}