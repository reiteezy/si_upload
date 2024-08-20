<?php

class Account_model extends CI_Model{

     function __construct(){
        parent::__construct();
        // $this->hr = $this->load->database('hr', TRUE);
        // $this->nav = $this->load->database('navision', TRUE);
       
     }

    //  function retrieveEmployeeName($emp_id){
    //       $cmd = 'select name from pis.employee3 where emp_id=?';
    //       $query = $this->hr->query($cmd, array($emp_id));
    //       return $query->row_array();
    //  }

    //    function get_user_info($id)
    //    {
    //       $this->db->select("*");
    //       $this->db->from("reorder_users");
    //       $this->db->where("user_id",$id);
    //       $query = $this->db->get();
    //       return $query->result_array();
    //    }
  
    // NON AGC USER ------------------
    function retrieveAccountNonAgc($user, $pass) {
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
    
    
    function retrieveSupplierDetails($vendor_code) {
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
    





 // AGC USER -------------------
//  function retrieveAccountID($user, $pass) {
//      $query = $this->db->query(
//          "SELECT password, user_id, username, emp_id, user_type
//           FROM reorder_users 
//           WHERE username = ? AND user_type = 'buyer';",
//          array($user)
//      );
 
//      $row = $query->row_array();
 
//      if (isset($row) && password_verify($pass, $row["password"])) {
//          return array(
//              'user_id' => $row["user_id"],
//              'username' => $row["username"],
//              'emp_id' => $row["emp_id"],
//              'user_type' => $row["user_type"]
//          );
//      }
 
//      return false;
//  }
 

}   