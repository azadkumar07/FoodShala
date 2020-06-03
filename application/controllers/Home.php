<?php 

class home extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		}
        public function index()
        {
                $this->load->view('Home');
        }
}

?>