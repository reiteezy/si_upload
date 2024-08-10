<?php

class Account_model extends CI_Model{

     function __construct(){
        parent::__construct();
        // $this->hr = $this->load->database('hr', TRUE);
        // $this->nav = $this->load->database('navision', TRUE);
       
     }


     function retrieveEmployeeName($emp_id){
          $cmd = 'select name from pis.employee3 where emp_id=?';
          $query = $this->hr->query($cmd, array($emp_id));
          return $query->row_array();
     }

       function get_user_info($id)
       {
          $this->db->select("*");
          $this->db->from("reorder_users");
          $this->db->where("user_id",$id);
          $query = $this->db->get();
          return $query->result_array();
       }
  
       function retrieveAccountID($user, $pass) {
        // Query to get the password
        $query = $this->db->query("SELECT password FROM reorder_users WHERE username = ?;", array($user));
        $row = $query->row_array();
        
         if (isset($row)) {
              // Verify the password
              if (password_verify($pass, $row["password"])) {
                   // Query to get user_id, username, and emp_id
                   $query = $this->db->query("SELECT user_id, username, emp_id FROM reorder_users WHERE username = ?;", array($user));
                   $row = $query->row_array();
                
                   if (isset($row)) {
                        // Return user_id, username, and emp_id
                        return array(
                             'user_id' => $row["user_id"],
                             'username' => $row["username"],
                             'emp_id' => $row["emp_id"]
                        );
                   }
              // If user is not found, return 0
              return 0;  
            }    
         }
        
        // If password is incorrect or user is not found, return 0
        return 0;
    }
}   
