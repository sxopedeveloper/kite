<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Admin extends CI_Controller
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
		$this->load->view('admin/layout/header',$title);
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/dash');
		$this->load->view('admin/layout/footer');

	}
	public function sett(){
		$title['title'] = "Dashboard"; 
		$this->load->view('admin/layout/header',$title);
		$this->load->view('admin/layout/sidebar');
		$data['instrument_token'] = $this->db->query("SELECT * FROM mytable WHERE admin_access = 1 ")->result();
		$this->load->view('admin/settings',$data);
		$this->load->view('admin/layout/footer');
	}

}
