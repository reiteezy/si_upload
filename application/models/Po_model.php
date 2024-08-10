<?php

class Po_model extends CI_Model{

     function __construct(){
        parent::__construct();
        $this->load->model('Acct_mod');
        // $this->cas = $this->load->database('cas', TRUE);
        // $this->mw = $this->load->database('middleware', TRUE);
       
     }


     function get_all_po_header($is_cancel=false){
          
          $table_query = "SELECT a.hd_id,a.document_no,a.date_ AS po_date,a.vendor AS vendor_code,
               a.db_id,a.textfile_name AS doc_no,a.status,
               b.value_ AS store,d.emp_id AS request_by,e.emp_id AS remark_by 
               FROM pending_po_header a INNER JOIN reorder_store b ON a.db_id=b.databse_id 
               LEFT JOIN reorder_po_log c ON a.hd_id=c.hd_id 
               LEFT JOIN reorder_users d ON c.request_by=d.user_id 
               LEFT JOIN reorder_users e ON c.remark_by=e.user_id 
               WHERE ";

          if($is_cancel)
               $table_query .= "a.status='CANCELED'";
          else     
               $table_query .= "a.status!='CANCELED' OR a.status IS NULL";

          $query = $this->db->query($table_query);
          return $query->result_array(); 
     }

  


}   
