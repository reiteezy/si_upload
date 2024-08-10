<?php

class PoController extends CI_Controller
{
      function __construct(){
         parent::__construct();
        //  $this->load->model('Mms_mod');
         $this->load->model('Po_model');
         $this->load->model('Account_model');
      }

    function get_po_list(){

    $memory_limit = ini_get('memory_limit');
    ini_set('memory_limit',-1);
    ini_set('max_execution_time', 0);

    $start         = $this->input->post('start'); 
    $length        = $this->input->post('length'); 
    $searchValue   = $this->input->post('search')['value']; 

    $emp_info    = $this->Account_model->get_user_info($_SESSION['mms_user']);
    $is_ch   = ($emp_info[0]['user_type'] == 'category-head') ? true : false;

    $po_headers = $this->Po_model->get_all_po_header();
    $result = array();

    foreach($po_headers as $po){
            
    $po["store"] = strtoupper($po["store"]);      
    $po["status"] = ($po["status"]==null) ? "ACTIVE" : $po["status"];

    if($po["request_by"]!=null)
        $po["request_by"] = $this->Account_model->retrieveEmployeeName($log_details["request_by"])["name"];
    else
        $po["request_by"] = '';
    
    if($po["remark_by"]!=null)
        $po["remark_by"] = $this->Account_model->retrieveEmployeeName($log_details["remark_by"])["name"];
    else
        $po["remark_by"] = '';

    
    if($searchValue=='')
        $result[] = $po;
    else{
        if((strpos(strtolower($po["store"]), strtolower($searchValue)) !== false || 
            strpos(strtolower($po["vendor_code"]), strtolower($searchValue)) !== false || 
            strpos(strtolower($po["doc_no"]), strtolower($searchValue)) !== false || 
            strpos(strtolower($po["po_date"]), strtolower($searchValue)) !== false || 
            strpos(strtolower($po["status"]), strtolower($searchValue)) !== false )){
                
            $result[] = $po;
        }
    }
    

    }


    $totalRecords = count($result);
    $slice = array_slice($result, $start, $length);

    $data = array(
                'draw'            => $this->input->post('draw'), 
                'recordsTotal'    => $totalRecords,
                'recordsFiltered' => $totalRecords,
                'data'            => $slice
                );

    echo json_encode($data);  
    ini_set('memory_limit',$memory_limit);  
    }

}

?>