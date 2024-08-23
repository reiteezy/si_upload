<?php

class Po_model extends CI_Model{

     function __construct(){
        parent::__construct();
        $this->load->model('Account_model');
        // $this->cas = $this->load->database('cas', TRUE);
        // $this->mw = $this->load->database('middleware', TRUE);
       
     }

    //  function get_all_pending_po_header() {
    //     if (!isset($_SESSION['vendor_code'])) {
    //         return [];
    //     }
        
    //     // $vendor_code = $_SESSION['vendor_code'];
        
    //     $table_query = "
    //         SELECT a.hd_id, a.document_no, a.date_ AS po_date, a.vendor AS vendor_code,
    //                a.db_id, a.textfile_name AS doc_no, a.status,
    //                b.value_ AS store
    //         FROM pending_po_header a
    //         INNER JOIN reorder_store b ON a.db_id = b.databse_id
    //         LEFT JOIN reorder_po_log c ON a.hd_id = c.hd_id
    //         WHERE (a.status = 'Active')
    //     ";
        
    //     $query = $this->db->query($table_query);
        
    //     return $query->result_array();
    // }
    function get_noncas_po_header() {
        
        $cas_name = 'ASMGMCPO';
        $table_query = "
          SELECT a.hd_id, a.document_no, a.date_ AS po_date, a.vendor AS vendor_code,
                 a.db_id, a.textfile_name AS doc_no, a.status, a.status_b, 
                 b.value_ AS store
          FROM pending_po_header a
          INNER JOIN reorder_store b ON a.db_id = b.databse_id
          WHERE a.document_no NOT LIKE '{$cas_name}%'
          ";
        
        $query = $this->db->query($table_query);
        
        return $query->result_array();
    }
    function get_cas_po_header() {
        
        $cas_name = 'ASMGMCPO';
        $table_query = "
          SELECT a.hd_id, a.document_no, a.date_ AS po_date, a.vendor AS vendor_code,
                 a.db_id, a.textfile_name AS doc_no, a.status, a.status_b,
                 b.value_ AS store
          FROM pending_po_header a
          INNER JOIN reorder_store b ON a.db_id = b.databse_id
          WHERE a.document_no LIKE '{$cas_name}%'
          ";
        
        $query = $this->db->query($table_query);
        
        return $query->result_array();
    }





     function get_pending_po_header() {
          if (!isset($_SESSION['vendor_code'])) {
              return [];
          }
          
          $vendor_code = $_SESSION['vendor_code'];
          
          $table_query = "
            SELECT a.hd_id, a.document_no, a.date_ AS po_date, a.vendor AS vendor_code,
                   a.db_id, a.textfile_name AS doc_no, a.status, 
                   b.value_ AS store, MAX(d.document_no) AS si_doc_no 
            FROM pending_po_header a
            INNER JOIN reorder_store b ON a.db_id = b.databse_id
            LEFT JOIN reorder_po_log c ON a.hd_id = c.hd_id
            LEFT JOIN si_uploads d ON a.document_no = d.document_no
            WHERE a.status_b = 'Pending'
            AND a.status = 'Active'
            AND a.vendor = ?
            GROUP BY a.hd_id, a.document_no,  a.date_, a.vendor, a.db_id, 
                     a.textfile_name, 
                     a.status, 
                     b.value_
            ";
          
          $query = $this->db->query($table_query, [$vendor_code]);
          
          return $query->result_array();
      }
      
      
      function get_cancelled_po_header() {
        if (!isset($_SESSION['vendor_code'])) {
            return [];
        }
        
        $vendor_code = $_SESSION['vendor_code'];
        
        $table_query = "
            SELECT a.hd_id, a.document_no, a.date_ AS po_date, a.vendor AS vendor_code,
                   a.db_id, a.textfile_name AS doc_no, a.status,
                   b.value_ AS store, MAX(d.document_no) AS si_doc_no 
            FROM pending_po_header a
            INNER JOIN reorder_store b ON a.db_id = b.databse_id
            LEFT JOIN reorder_po_log c ON a.hd_id = c.hd_id
            LEFT JOIN si_uploads d ON a.document_no = d.document_no
            WHERE (a.status = 'Cancelled')
            AND a.vendor = ?
            GROUP BY a.hd_id, a.document_no,  a.date_, a.vendor, a.db_id, 
                     a.textfile_name, 
                     a.status, 
                     b.value_
        ";
        
        $query = $this->db->query($table_query, [$vendor_code]);
        
        return $query->result_array();
    }
    
    function get_partial_delivered_po_header() {
        if (!isset($_SESSION['vendor_code'])) {
            return [];
        }
        
        $vendor_code = $_SESSION['vendor_code'];
        
        $table_query = "
            SELECT a.hd_id, a.document_no, a.date_ AS po_date, a.vendor AS vendor_code,
                   a.db_id, a.textfile_name AS doc_no, a.status,
                   b.value_ AS store, MAX(d.document_no) AS si_doc_no 
            FROM pending_po_header a
            INNER JOIN reorder_store b ON a.db_id = b.databse_id
            LEFT JOIN reorder_po_log c ON a.hd_id = c.hd_id
            LEFT JOIN si_uploads d ON a.document_no = d.document_no
            WHERE (a.status_b = 'Partially Delivered')
            AND (a.status = 'Active')
            AND a.vendor = ?
            GROUP BY a.hd_id, a.document_no,  a.date_, a.vendor, a.db_id, 
                     a.textfile_name, 
                     a.status, 
                     b.value_
        ";
        
        $query = $this->db->query($table_query, [$vendor_code]);
        
        return $query->result_array();
    }


    function get_full_delivered_po_header() {
        if (!isset($_SESSION['vendor_code'])) {
            return [];
        }
        
        $vendor_code = $_SESSION['vendor_code'];
        
        $table_query = "
            SELECT a.hd_id, a.document_no, a.date_ AS po_date, a.vendor AS vendor_code,
                   a.db_id, a.textfile_name AS doc_no, a.status,
                   b.value_ AS store, MAX(d.document_no) AS si_doc_no 
            FROM pending_po_header a
            INNER JOIN reorder_store b ON a.db_id = b.databse_id
            LEFT JOIN reorder_po_log c ON a.hd_id = c.hd_id
            LEFT JOIN si_uploads d ON a.document_no = d.document_no
            WHERE (a.status_b = 'Fully Delivered')
            AND (a.status = 'Active')
            AND a.vendor = ?
            GROUP BY a.hd_id, a.document_no,  a.date_, a.vendor, a.db_id, 
                     a.textfile_name, 
                     a.status, 
                     b.value_
            ";
        
        $query = $this->db->query($table_query, [$vendor_code]);
        
        return $query->result_array();
    }

    function getPoLines($hd_id){ 
        $cmd = "SELECT p.item_code, p.pending_qty, p.uom, d.description FROM pending_po_lines p INNER JOIN distribution d ON p.item_code=d.dist_id WHERE p.hd_id=?";                
        $query = $this->db->query($cmd,array($hd_id));
        return $query->result_array();
   }


}   