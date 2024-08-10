<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

    function __construct() 
	{ 
        parent::__construct();
    }

        public function index()
        {
        $this->load->view('require/header');
        $this->load->view('main/login');
        $this->load->view('require/footer');
        }
        

        public function dashboard()
	{
        $data['menu'] = 'dashboard';
        $this->load->view('require/header');
        $this->load->view('require/navbar');
        $this->load->view('require/nav', $data);
        $this->load->view('main/dashboard');
        $this->load->view('require/footer');
	}


	public function si_upload()
	{
        $this->load->view('require/header');
        $this->load->view('require/navbar');
        $this->load->view('require/nav');
        $this->load->view('main/main_view');
        $this->load->view('require/footer');
	}


        public function po_list()
	{
        $data['menu'] = 'po_list';
        $this->load->view('require/header');
        $this->load->view('require/navbar');
        $this->load->view('require/nav', $data);
        $this->load->view('main/po_list_ui');
        $this->load->view('require/footer');
	}
}
