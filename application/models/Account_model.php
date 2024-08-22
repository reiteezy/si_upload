<?php

class Account_model extends CI_Model{

        function __construct(){
        parent::__construct();
        $this->hr = $this->load->database('hr', TRUE);
        // $this->nav = $this->load->database('navision', TRUE);
       
        }

       function get_user_info($id)
       {
          $this->db->select("*");
          $this->db->from("reorder_users");
          $this->db->where("user_id",$id);
          $query = $this->db->get();
          return $query->result_array();
       }
  
// NON AGC USER ------------------
        function retrieveAccountNonAgc($user, $pass) 
        {
            $this->db->where('username', $user);
            $this->db->select('users_non_agc.*');
            $this->db->from('users_non_agc');
            $query = $this->db->get();
        
            if ($query->num_rows() > 0) {
                $row = $query->row(); 
                $vendor_code = $row->vendor_no;
            
                $supplierDetails = $this->retrieveSupplierDetails($vendor_code);

                if (password_verify($pass, $row->password)) {
                    $session_data = array(
                        'user_id' => $row->user_id,
                        'vendor_code' => $row->vendor_no,
                        'username' => $row->username,
                        'user_type' => $row->user_type,
                        'supplier_name' => isset($supplierDetails->Name) ? $supplierDetails->Name : 'Unknown',
                        'logged_in' => true
                    );
                    $this->session->set_userdata($session_data);
                    return 'active_user';
                } else {
                    return 'inactive_user';  
                }
                
        } else {
            return 'inactive_user';  
        }
        }
    
        // AGC USER -------------------
        function retrieveAccountID($user, $pass) 
        {
            $this->db->where('username.', $user);
            $this->db->where('user_type.', 'buyer');
            $this->db->select('reorder_users.*');
            $this->db->from('reorder_users');
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                $row = $query->row(); 
                $emp_id = $row->emp_id;
            
                // $empDetails = $this->retrieveEmployeeDetails($emp_id);

                if (password_verify($pass, $row->password)) {
                    $session_data = array(
                        'user_id' => $row->user_id,
                        'username' => $row->username,
                        'emp_id' => $row->emp_id,
                        'user_type' => $row->user_type,
                        // 'emp_name' => isset($empDetails->name) ? $empDetails->name : 'Unknown',
                        'logged_in' => true
                    );
                    $this->session->set_userdata($session_data);
                    return 'active_user';
                } else {
                    return 'inactive_user';  
                }
                
            } else {
                return 'inactive_user';  
            }

        }
    
        function retrieveSupplierDetails($vendor_code) 
        {
            $this->db->select('nav_vendors.Name');
            $this->db->from('nav_vendors');
            $this->db->join('users_non_agc', 'users_non_agc.vendor_no = nav_vendors.No');
            $this->db->where('nav_vendors.No', $vendor_code);
            $query = $this->db->get();
        
            if ($query->num_rows() > 0) {
                return $query->row(); 
            } else {
                return null; 
            }
        }

        function retrieveEmployeeDetails($emp_id)
        {
            $cmd = 'select name from pis.employee3 where emp_id=?';
            $query = $this->hr->query($cmd, array($emp_id));
            return $query->row();
        }

       function getPhoto($emp_id){
            $cmd = 'select photo from pis.applicant where app_id=?';
            $query = $this->hr->query($cmd, array($emp_id));
            return $query->row_array()["photo"];
       }


 

}   