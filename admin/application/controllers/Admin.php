<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Admin extends CI_Controller
{
	public $data = [];
	const MAX_PASSWORD_SIZE_BYTES = 4096;

	protected function _get_hash_algo()
	{
		$algo = FALSE;
		switch ($this->hash_method)
		{
			case 'bcrypt':
				$algo = PASSWORD_BCRYPT;
				break;

			case 'argon2':
				$algo = PASSWORD_ARGON2I;
				break;

			default:
				// Do nothing
		}

		return $algo;
	}

	protected function _get_hash_parameters($identity = NULL)
	{
		// Check if user is administrator or not
		$is_admin = FALSE;
		if ($identity)
		{
			$user_id = $this->get_user_id_from_identity($identity);
			if ($user_id && $this->in_group($this->config->item('admin_group', 'ion_auth'), $user_id))
			{
				$is_admin = TRUE;
			}
		}

		$params = FALSE;
		switch ($this->hash_method)
		{
			case 'bcrypt':
				$params = [
					'cost' => $is_admin ? $this->config->item('bcrypt_admin_cost', 'ion_auth')
										: $this->config->item('bcrypt_default_cost', 'ion_auth')
				];
				break;

			case 'argon2':
				$params = $is_admin ? $this->config->item('argon2_admin_params', 'ion_auth')
									: $this->config->item('argon2_default_params', 'ion_auth');
				break;

			default:
				// Do nothing
		}

		return $params;
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->hash_method = $this->config->item('hash_method', 'ion_auth');
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

	public function client_list(){
		$query = ("SELECT * FROM clients");
		$data['clients'] = $this->db->query($query)->result();
		$this->load->view("admin/layout/header");
		$this->load->view("admin/layout/sidebar");
		$this->load->view("admin/list_client",$data);
		$this->load->view("admin/layout/footer");
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

		public function hash_password($password, $identity = NULL)
	{
		// Check for empty password, or password containing null char, or password above limit
		// Null char may pose issue: http://php.net/manual/en/function.password-hash.php#118603
		// Long password may pose DOS issue (note: strlen gives size in bytes and not in multibyte symbol)
		if (empty($password) || strpos($password, "\0") !== FALSE ||
			strlen($password) > self::MAX_PASSWORD_SIZE_BYTES)
		{
			return FALSE;
		}

		$algo = $this->_get_hash_algo();
		$params = $this->_get_hash_parameters($identity);

		if ($algo !== FALSE && $params !== FALSE)
		{
			return password_hash($password, $algo, $params);
		}

		return FALSE;
	}

	public function add_client(){

		$data = $this->input->post('data');
		$sql = ("SELECT * FROM `script_group` WHERE id ='29' ");
		$group = $this->db->query($sql)->result();
		$data['s_limit'] = $group[0]->s_limit; 
		$data['s_active'] = $group[0]->s_active; 
		$data['s_single'] = $group[0]->s_single; 

		// print_r($data);
		// exit;

		$identity = $data['client_code'];
		$email = strtolower($data['client_code'].'@'.$data['client_code'].'.com');
		$password = $this->hash_password($data['pass1']);


		// Users table.
		$data1 = [
			'first_name' => $data['name'],
			'last_name' => $data['name'],
			'company' => 'Company',
			'phone' => '123456',
			'username' => $identity,
			'email' => $email,
			'password' => $password,
			'email' => $email,
			'ip_address' => '127.0.0.0',
			'created_on' => time(),
			'active' => '1'
		];
		
		// print_r($data1);
		// die();
		$this->db->insert('users', $data1);

			$this->db->insert('clients', $data);
			redirect ('Admin/client_list');

	}



	public function allocate($id){
		if (!$this->ion_auth->logged_in()){

			// redirect them to the login page
			redirect('auth/login', 'refresh');

			
		}else{
			$sql = ("SELECT * FROM clients WHERE id='".$id."' ");
			$data['details'] = $this->db->query($sql)->result();
			$sql2 = ("SELECT * FROM script_group");
			$data['s_group'] = $this->db->query($sql2)->result();
			// print_r($data['details'][0]->id);
			// exit();
			$sql = ("SELECT * FROM allocate_table WHERE Client = '".$data['details'][0]->client_code."' ");
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

		redirect ('admin/client_list');
		
	}

	public function remove_allocation($id){

		$query = ("DELETE FROM allocate_table WHERE ID =".$id." ");
		$this->db->query($query);
		$referred_from = $this->session->userdata('referred_from');
		redirect($referred_from, 'refresh');
		// redirect ('Admin/allocate/'.$id);
	}

	public function deleteAll()
    {
        $ids = $this->input->post('ids');
 
        $this->db->where_in('id', explode(",", $ids));
        $this->db->delete('allocate_table');
 
        echo json_encode(['success'=>"Item Deleted successfully."]);
    }

    public function timezone(){
    	if (!$this->ion_auth->logged_in()){

			// redirect them to the login page
			redirect('auth/login', 'refresh');

			
		}else{

			$query = ("SELECT * FROM timezoneset ");
			$data['users'] = $this->db->query($query)->result();
			$this->load->view('admin/layout/header');
			$this->load->view("admin/layout/sidebar");
			$this->load->view("admin/time",$data);
			$this->load->view("admin/layout/footer");
		}
    }

}
