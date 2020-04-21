<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Script extends CI_Controller
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
			$this->load->view("client/layout/header");
			$this->load->view("client/layout/sidebar");
			$this->load->view("client/home");
			$this->load->view("client/layout/footer");
		}else{

			$sql = ("SELECT DISTINCT(tradingsymbol) AS data, instrument_type, segment, exchange FROM `mytable` WHERE admin_access=1 ");
			$data['script'] = $this->db->query($sql)->result();
			$this->load->view("admin/layout/header");
			$this->load->view("admin/layout/sidebar");
			$this->load->view("scripts/showscript",$data);
			$this->load->view("admin/layout/footer");
		}

		
	}

	public function manage_script(){

		if (!$this->ion_auth->logged_in()){

			// redirect them to the login page
			redirect('auth/login', 'refresh');

			
		}elseif(!$this->ion_auth->is_admin()){
			$this->load->view("client/layout/header");
			$this->load->view("client/layout/sidebar");
			$this->load->view("client/home");
			$this->load->view("client/layout/footer");

		}else{

			$sql = ("SELECT * FROM `script_group` ");
			$data['script'] = $this->db->query($sql)->result();
			$this->load->view("admin/layout/header");
			$this->load->view("admin/layout/sidebar");
			$this->load->view("scripts/manage",$data);
			$this->load->view("admin/layout/footer");
		}

		
	}

	public function add_group(){

		if (!$this->ion_auth->logged_in()){

			// redirect them to the login page
			redirect('auth/login', 'refresh');

			
		}elseif(!$this->ion_auth->is_admin()){
			$this->load->view("client/layout/header");
			$this->load->view("client/layout/sidebar");
			$this->load->view("client/home");
			$this->load->view("client/layout/footer");

		}else{
			$sql = ("SELECT tradingsymbol AS Scrip FROM mytable WHERE admin_access = 1 ");
			$data['data'] = $this->db->query($sql)->result(); 
			$this->load->view("admin/layout/header");
			$this->load->view("admin/layout/sidebar");
			$this->load->view("scripts/add_grp",$data);
			$this->load->view("admin/layout/footer");
		}

		
	}

	public function save_group(){

		$data = $this->input->post('data');
		$active = json_encode($data['valid']);
		$limit = json_encode($data['limit']);
		$single = json_encode($data['single']);
		$bro = json_encode($data['bro']);
		$store = array();
		
		$store['g_name'] = $data['name'];
		$store['g_code'] = $data['code'];
		$store['s_active'] = $active;
		$store['s_limit'] = $limit;
		$store['s_single'] = $single;
		$store['s_bro'] = $bro;
		$store['remark'] = $data['remark'];

		if($this->input->post('flag')==0){

			if(!$this->db->insert('script_group',$store)){
				echo "Error In Store script_group";
				redirect ('/Script/manage_script');

			}

		}else{
				$this->db->where('id', $this->input->post('flag'));
				$this->db->update('script_group',$store);
				redirect ('/Script/manage_script');

			}
			redirect ('/Script/manage_script');

			

		


		// print_r($store);
		// die();
	}

	public function edit_group($id){

		$sql = ("SELECT * FROM script_group WHERE id='".$id."' ");
		$data['details'] = $this->db->query($sql)->result();

		$sql = ("SELECT tradingsymbol AS Scrip FROM mytable WHERE admin_access = 1 ");
		$data['data'] = $this->db->query($sql)->result(); 
		// print_r($data);
		// die();
		$this->load->view("admin/layout/header");
		$this->load->view("admin/layout/sidebar");
		$this->load->view("scripts/edit_grp",$data);
		$this->load->view("admin/layout/footer");

		// print_r($data);
		// die();

	}


	public function delete_group($id){

		$sql = ("DELETE FROM script_group WHERE id='".$id."' ");
		$this->db->query($sql);
		redirect('Script/manage_script', 'refresh');
		// $sql = ("SELECT DISTINCT(Scrip) FROM itemwisebrok ");
		// $data['data'] = $this->db->query($sql)->result(); 
		// $this->load->view("admin/layout/header");
		// $this->load->view("admin/layout/sidebar");
		// $this->load->view("scripts/edit_grp",$data);
		// $this->load->view("admin/layout/footer");

		// print_r($data);
		// die();

	}

	

	public function script_list(){
		if (!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}else{
			$sql = ("SELECT * FROM myscript");
			$data['data'] = $this->db->query($sql)->result(); 
			$this->load->view("admin/layout/header");
			$this->load->view("admin/layout/sidebar");
			$this->load->view("scripts/list_src",$data);
			$this->load->view("admin/layout/footer");
		}
	}

	public function add_src(){
		$this->load->view("admin/layout/header");
		$this->load->view("admin/layout/sidebar");
		$this->load->view("scripts/add_src");
		$this->load->view("admin/layout/footer");
	}
	public function edit_src($id){
		$sql = ("SELECT * FROM myscript WHERE ID=".$id." ");
		$data['data'] = $this->db->query($sql)->result();
		$this->load->view("admin/layout/header");
		$this->load->view("admin/layout/sidebar");
		$this->load->view("scripts/edit_src",$data);
		$this->load->view("admin/layout/footer");
	}

	public function save_src(){
		$data = $this->input->post('data');

		if(($this->input->post('flag'))==0){

			if(!$this->db->insert('myscript',$data)){
				echo "Error In Store script";
			}
				redirect ('/Script/script_list');
		}
		else{
				$this->db->where('ID', $this->input->post('flag'));
				$this->db->update('myscript',$data);
				redirect ('/Script/script_list');
		}
	}

	public function remove($script){
		$sql = ("UPDATE mytable SET admin_access=0, user_access=0 WHERE instrument_token=".$script." ");
		$this->db->query($sql);
		redirect('Dashboard', 'refresh');

	}

	public function add_scr(){
		$script = $this->input->post('script');
		$sql = ("UPDATE mytable SET admin_access=1 WHERE instrument_token=".$script." ");
		$this->db->query($sql);
		redirect('Dashboard', 'refresh');

	}

	public function addToClient(){
		$data['Client'] = $this->input->post('ccode');
		$data['Scrip'] = $this->input->post('script');
		$data['SingleShot'] = $this->input->post('single');
		$data['MaxQty'] = $this->input->post('max');
		$data['Brokerage'] = $this->input->post('bro');
		$sql = ("SELECT * FROM allocate_table WHERE Client = '".$data['Client']."' AND Scrip = '".$data['Scrip']."' ");
		$data1 = $this->db->query($sql)->result();
		
		if(sizeof($data1) > 0){
		    $sql = ("UPDATE allocate_table SET Brokerage=".$data['Brokerage'].",MaxQty=".$data['MaxQty'].",SingleShot=".$data['SingleShot']." WHERE Client= '".$data['Client']."' AND Scrip='".$data['Scrip']."' ");
			$this->db->query($sql);
		    echo "Record updated";
			
		} else {
		    $this->db->insert('allocate_table', $data);
		    echo "Record Inserted";
		}
		// $sql = ("UPDATE mytable SET admin_access=1 WHERE instrument_token=".$script." ");

		echo json_encode("Data Success : ");
		//redirect('Dashboard', 'refresh');

	}


	public function addToGClient(){
		$data['Client'] = $this->input->post('ccode');
		$data['grp'] = $this->input->post('grp');

		$sql = ("SELECT * FROM script_group WHERE id = '".$data['grp']."'");
		$data1 = $this->db->query($sql)->result();
		$entry = array(); $counter=0;
		$details = json_decode($data1[0]->s_active);
		$Single = json_decode($data1[0]->s_single);
		$MaxQty = json_decode($data1[0]->s_limit);
		$Brokerage = json_decode($data1[0]->s_bro);
		
		if(sizeof($data1)>0){
			foreach($details as $active => $value){
				$entry[$counter]['Client'] = $data['Client'];
				$entry[$counter]['Scrip'] = $active;
				$entry[$counter]['SingleShot'] = $Single->$active;
				$entry[$counter]['MaxQty'] = $MaxQty->$active;
				$entry[$counter]['Brokerage'] = $Brokerage->$active;
				$counter++;
			}
		}

		for($i=0;$i<sizeof($entry);$i++){

			$sql = ("SELECT * FROM allocate_table WHERE Client = '".$entry[$i]['Client']."' AND Scrip = '".$entry[$i]['Scrip']."' ");
			$data1 = $this->db->query($sql)->result();
			
			if(sizeof($data1) > 0){
			    $sql = ("UPDATE allocate_table SET Brokerage='".$entry[$i]['Brokerage']."',MaxQty='".$entry[$i]['MaxQty']."',SingleShot='".$entry[$i]['SingleShot']."' WHERE Client= '".$entry[$i]['Client']."' AND Scrip = '".$entry[$i]['Scrip']."' ");
				$this->db->query($sql);
			    echo "Record updated";
				
			} else {
			    $this->db->insert('allocate_table', $entry[$i]);
			    echo "Record Inserted";
			}
		}
		
		// $sql = ("UPDATE mytable SET admin_access=1 WHERE instrument_token=".$script." ");

		echo json_encode("Data Success : ");
		//redirect('Dashboard', 'refresh');

	}

	public function addToRClient(){

		$data['Client'] = $this->input->post('ccode');
		$from = $this->input->post('r_from');
		$to = $this->input->post('r_to');
		$Brokerage = $this->input->post('r_bro');
		$MaxQty = $this->input->post('r_max');
		$SingleShot = $this->input->post('r_single');

		$sql = ("SELECT SYMBOL FROM bhavcopy WHERE LAST BETWEEN '".$from."' AND '".$to."' ");
		$data1 = $this->db->query($sql)->result();
		$entry = array(); $counter=0;

		if(sizeof($data1)>0){
			foreach($data1 as $d){
				echo $d->SYMBOL;
				$entry[$counter]['Client'] = $data['Client'];
				$entry[$counter]['Scrip'] = $d->SYMBOL;
				$entry[$counter]['SingleShot'] = $SingleShot;
				$entry[$counter]['MaxQty'] = $MaxQty;
				$entry[$counter]['Brokerage'] = $Brokerage;
				$counter++;
			}
		}

		for($i=0;$i<sizeof($entry);$i++){

			$sql = ("SELECT * FROM allocate_table WHERE Client = '".$entry[$i]['Client']."' AND Scrip = '".$entry[$i]['Scrip']."' ");
			$data1 = $this->db->query($sql)->result();
			
			if(sizeof($data1) > 0){
			    $sql = ("UPDATE allocate_table SET Brokerage='".$entry[$i]['Brokerage']."',MaxQty='".$entry[$i]['MaxQty']."',SingleShot='".$entry[$i]['SingleShot']."' WHERE Client= '".$entry[$i]['Client']."' AND Scrip = '".$entry[$i]['Scrip']."' ");
				$this->db->query($sql);
			    echo "Record updated";
				
			} else {
			    $this->db->insert('allocate_table', $entry[$i]);
			    echo "Record Inserted";
			}
		}



	}

	

}