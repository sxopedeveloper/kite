<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Report extends CI_Controller
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

			
		}else{

			$query = ("SELECT * FROM orders ORDER BY `orders`.`trans_id` DESC");
			$data['users'] = $this->db->query($query)->result();
			$this->load->view("admin/layout/header");
			// $this->load->view("admin/layout/sidebar");
			$this->load->view("admin/report",$data);
			$this->load->view("admin/layout/footer");
		}
	}
}