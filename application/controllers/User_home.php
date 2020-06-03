<?php 

class User_home extends CI_Controller {

	

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function Display_product(){
		$this->load->model('Admin_model');
		$r1=$this->Admin_model->select_data();
		$this->load->view('User_home',['d1'=>$r1]);
	}

    public function index(){

    	$this->load->view('User_home');
    }
    public function Oder_product(){
    	
    	$this->load->view('Oder_product');
    }

    public function insert_order(){



    	$this->form_validation->set_rules("name","Name","required");
		$this->form_validation->set_rules("quantity","Quantity","required");
		$this->form_validation->set_rules("pno","Phone Number","required");
		$this->form_validation->set_rules("address","Address","required");
		if($this->form_validation->run())
		{
			$data=$this->input->post();
			$this->load->model('Admin_model');
			unset($data['submit']);
			$flag=$this->Admin_model->insert_order($data);
			if($flag)
			{
				$this->load->view('Oder_product',['flag'=>'true']);
			}else{
				$this->load->view('Oder_product',['flag'=>'false']);
			}


		}else{
			
			$this->load->view('Oder_product');
		}



		
    }

    
     
 }

 ?> 