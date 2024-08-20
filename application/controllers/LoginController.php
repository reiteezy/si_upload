<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    function __construct() 
	{ 
        parent::__construct();
        $this->load->model('Account_model');

        // if (isset($_SESSION['mms_user'])) {
        //     $userCount = $this->Account_model->getUserCountById($_SESSION['mms_user']);
        //     var_dump($userCount);

        //     if ($userCount > 0) {
        //         $userDetails = $this->Account_model->retrieveUserDetails();
        //         var_dump($userDetails); 
        //         $userType = $userDetails["user_type"];
        //         var_dump($userType); 

              
        //             redirect(base_url('MainController/dashboard'));
               
                
        //     } else {
        //         unset($_SESSION['mms_user']);
        //     }
        // }
    }
    public function login() {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        
        // Check in non-AGC users table
        $check = $this->Account_model->retrieveAccountNonAgc($user, $pass);
        if ($check == 'active_user') {
            echo json_encode(array('status' => 'success', 'redirect_url' => base_url() . 'MainController/dashboard'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Invalid Credentials'));
        }
    
    // Check in AGC users table
    // $user = $this->Account_model->retrieveAccountID($user, $pass);

        // if ($user) {
        //     $session_data = array(
        //         'user_id' => $user['user_id'],
        //         // 'vendor_id' =>  $result['vendor_no'],
        //         'username' =>  $user['username'],
        //         'user_type' =>  $user['user_type']
        //     );
        //     $this->session->set_userdata($session_data);

        //     echo json_encode(array('status' => 'success', 'redirect_url' => base_url() . 'MainController/dashboard'));
        //     return;
        // }
    
        // echo json_encode(array('status' => 'error', 'message' => 'Invalid Credentials'));
    }
    
    function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'Logged Out Of The System');
        redirect(base_url(), 'refresh');
        }
}