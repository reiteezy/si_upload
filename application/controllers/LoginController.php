<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    function __construct() 
	{ 
        parent::__construct();
        $this->load->model('Account_model');


    }
    public function login() {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        
        $checkNonAgc = $this->Account_model->retrieveAccountNonAgc($user, $pass);
        if ($checkNonAgc == 'active_user') {
            echo json_encode(array('status' => 'success', 'redirect_url' => base_url() . 'MainController/dashboard'));
            return; 
        }
    
        $checkAgc = $this->Account_model->retrieveAccountID($user, $pass);
        if ($checkAgc == 'active_user') {
            echo json_encode(array('status' => 'success', 'redirect_url' => base_url() . 'MainController/dashboard'));
            return; 
        }
        
        echo json_encode(array('status' => 'error', 'message' => 'Invalid Credentials'));
    }
    
    
    function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'Logged Out Of The System');
        redirect(base_url(), 'refresh');
        }


    public function checkSession() {
        
        $response = array('sessionExpired' => !$this->session->has_userdata('user_id'));
        echo json_encode($response);
        }
}