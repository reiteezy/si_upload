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

    public function login(){

        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
    

        $result = $this->Account_model->retrieveAccountID($user, $pass);

        if (is_array($result)) {
            // Credentials are correct, set session variables
            $_SESSION['mms_user'] = $result['user_id'];
            $_SESSION['username'] = $result['username'];
                        
            echo json_encode(array('status' => 'success', 'redirect_url' => base_url() . 'MainController/dashboard'));
        } else {
            // Credentials are incorrect
            echo json_encode(array('status' => 'error', 'message' => 'Invalid Credentials'));
        }
    }
    // function session_check_js(){
    //     $response = 'yes'; 
        
    //     $data['response'] = $response;
    //     echo json_encode($data);
    //  }

    function logout(){
        unset($_SESSION['mms_user']);
        redirect(base_url());
     }
}