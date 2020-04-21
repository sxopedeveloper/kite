<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Client extends CI_Controller
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

	/**
	 * Redirect if needed, otherwise display the user list
	 */
	public function index()
	{
		$title['title'] = "Dashboard"; 
		$this->load->view('client/design/header',$title);
		$this->load->view('client/design/nav');
		$data['instrument_token'] = $this->db->query("SELECT * FROM mytable WHERE admin_access = 1 ")->result();
		$this->load->view('client/dash',$data);
		$this->load->view('client/design/footer');
		// $this->load->view('client/layout/footer');

	}

	public function create_client(){
		if (!$this->ion_auth->logged_in()){

			// redirect them to the login page
			redirect('auth/login', 'refresh');

			
		}else{
			$sql = ("SELECT id,g_name FROM `script_group`");
			$data['group'] = $this->db->query($sql)->result();
			$this->load->view("admin/layout/header");
			$this->load->view("admin/layout/sidebar");
			$this->load->view("admin/add_client",$data);
			$this->load->view("admin/layout/footer");
		}	
	}

	public function add_client(){

		$data = $this->input->post('data');
		$sql = ("SELECT * FROM `script_group` WHERE id = ".$data['s_id']." ");
		$group = $this->db->query($sql)->result();
		$data['s_limit'] = $group[0]->s_limit; 
		$data['s_active'] = $group[0]->s_active; 
		$data['s_single'] = $group[0]->s_single; 

		$this->db->insert('clients', $data);

		redirect ('Client');
	}
	
	public function report(){

		$title['title'] = "Dashboard"; 
		$this->load->view('client/design/header',$title);
		$this->load->view('client/design/nav');
	    $query = ("SELECT * FROM orders WHERE client_id = ".$this->ion_auth->get_user_id()." ORDER BY `orders`.`trans_id` DESC");
		$data['users'] = $this->db->query($query)->result();
		//$this->load->view("admin/layout/header");
		// $this->load->view("admin/layout/sidebar");
		$this->load->view("client/report",$data);
		$this->load->view('client/design/footer');
		//$this->load->view("admin/layout/footer");
	}

	
	public function allocate($id){
		if (!$this->ion_auth->logged_in()){

			// redirect them to the login page
			redirect('auth/login', 'refresh');

			
		}else{
			$sql = ("SELECT * FROM clients WHERE id='".$id."' ");
			$data['details'] = $this->db->query($sql)->result();
			$sql = ("SELECT * FROM mytable WHERE admin_access=1");
			$data['data'] = $this->db->query($sql)->result(); 
			$this->load->view("admin/layout/header");
			$this->load->view("admin/layout/sidebar");
			$this->load->view("admin/allocation",$data);
			$this->load->view("admin/layout/footer");
		}	
	}

	public function modify_script(){

		$data = $this->input->post('data');

		$active = "'".json_encode($data['valid'])."'";
		$limit = "'".json_encode($data['limit'])."'";
		$single = "'".json_encode($data['single'])."'";


		$this->db->set('s_limit', $limit, FALSE);
		$this->db->set('s_active', $active, FALSE);
		$this->db->set('s_single', $single, FALSE);
		$this->db->where('id', $data['id']);
		$this->db->update('clients');

		redirect ('Client');
		
	}

	public function sett(){
		$title['title'] = "Dashboard"; 
		$this->load->view('streamer/layout/header',$title);
		$this->load->view('streamer/layout/sidebar');
		$data['instrument_token'] = $this->db->query("SELECT * FROM mytable WHERE admin_access = 1 AND user_access = 1")->result();
		$this->load->view('client/sett',$data);
		$this->load->view('streamer/layout/footer');
	}


	public function remove($script){
		$sql = ("UPDATE mytable SET user_access=0 WHERE instrument_token=".$script." ");
		$this->db->query($sql);
		redirect('Client/sett', 'refresh');

	}

}
