<?php 

class Admin_login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

    public function index(){
                $this->load->view('Admin_login');
    }

    public function login(){

		$this->form_validation->set_rules("un","User Name","required");
		$this->form_validation->set_rules("ps","Password","required");
		if($this->form_validation->run())
		{	
			$un=$this->input->post('un');
			$ps=$this->input->post('ps');
			$this->load->model('Admin_login1');
			$data=$this->Admin_login1->login($un,$ps);
			if($data){
				$this->session->set_userdata('uid',$un);
				return redirect('Admin_home');

			}else{

				$this->load->view('Admin_login',['flag'=>'false']);
			}

		}
		else
		{
			 $this->load->view('Admin_login');
		}
		
	}

	public function reg_open(){

		$this->load->view('Admin_reg');
		
	}

	public function reg(){

		$this->form_validation->set_rules("un","User Name","required");
		$this->form_validation->set_rules("ps","Password","required");
		if($this->form_validation->run())
		{
			$data=$this->input->post();
			$this->load->model('Admin_model');
			unset($data['reg']);
			$flag=$this->Admin_model->reg($data);
			if($flag)
			{
				$this->load->view('Admin_reg',['flag'=>'true']);
			}else{
				$this->load->view('Admin_reg',['flag'=>'']);
			}
		}else{
			$this->load->view('Admin_reg');
		}
		
	}

	



}

?>