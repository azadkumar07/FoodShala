<?php 

class Admin_home extends CI_Controller {

	public function Display_product(){
		$this->load->model('Admin_model');
		$r1=$this->Admin_model->select_data();
		$this->load->view('Home',['d1'=>$r1]);
	}

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

    public function index(){
    	$this->load->view('Admin_home');
    }
    public function Add_product(){
    	
    	$this->load->view('Add_product');
    }

    public function Display_orders(){

		$this->load->model('Admin_model');
		$r1=$this->Admin_model->select_orders();
		$this->load->view('Admin_home',['d1'=>$r1]);
	}

    public function insert_product(){



    	$this->form_validation->set_rules("name","Name","required");
		$this->form_validation->set_rules("price","Price","required");
		$this->form_validation->set_rules("category","category","required");
		if($this->form_validation->run())
		{
			$data=$this->input->post();
			$this->load->model('Admin_model');
			unset($data['submit']);
			$flag=$this->Admin_model->insert_product($data);
			if($flag)
			{
				$this->load->view('Add_product',['flag'=>'true']);
			}else{
				$this->load->view('Add_product',['flag'=>'false']);
			}


		}else{
			
			$this->load->view('Add_product');
		}



		
    }
     
 }

 ?> 