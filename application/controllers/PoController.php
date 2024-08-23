<?php

class PoController extends CI_Controller
{
      function __construct(){
         parent::__construct();
        //  $this->load->model('Mms_mod');
         $this->load->model('Po_model');
         $this->load->model('Account_model');
      }

      // function get_all_pending_po_list(){
      //    error_reporting(E_ALL);
      //    ini_set('display_errors', 1);
      //    $memory_limit = ini_get('memory_limit');
      //    ini_set('memory_limit',-1);
      //    ini_set('max_execution_time', 0);
 
      //    $start         = $this->input->post('start'); 
      //    $length        = $this->input->post('length'); 
      //    $searchValue   = $this->input->post('search')['value']; 
      //    $user_id = $this->session->userdata('user_id');
         
        
      //    $po_headers = $this->Po_model->get_all_pending_po_header();
      //    $result = array();
 
      //    foreach($po_headers as $po){
      //       $hd_id = $po["hd_id"];
      //     //   $log_details = $this->Po_model->getPoLog($hd_id);
      //       $po["store"] = strtoupper($po["store"]);      
      //       $po["status"] = ($po["status"]==null) ? "ACTIVE" : $po["status"];
 
            
      //       if($searchValue=='')
      //          $result[] = $po;
      //       else{
      //          if((strpos(strtolower($po["store"]), strtolower($searchValue)) !== false || 
      //             strpos(strtolower($po["vendor_code"]), strtolower($searchValue)) !== false || 
      //             strpos(strtolower($po["document_no"]), strtolower($searchValue)) !== false || 
      //             strpos(strtolower($po["po_date"]), strtolower($searchValue)) !== false || 
      //             strpos(strtolower($po["status"]), strtolower($searchValue)) !== false )){
                     
      //             $result[] = $po;
      //          }
      //       }
            
      //    }
 
 
      //    $totalRecords = count($result);
      //    $slice = array_slice($result, $start, $length);
         
      //    $data = array(
      //                   'draw'            => $this->input->post('draw'), 
      //                   'recordsTotal'    => $totalRecords,
      //                   'recordsFiltered' => $totalRecords,
      //                   'data'            => $slice
      //                );
 
      //    echo json_encode($data);  
      //    ini_set('memory_limit',$memory_limit);  
 
      // }
 

      
    
    function get_pending_po_list(){
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $memory_limit = ini_get('memory_limit');
        ini_set('memory_limit',-1);
        ini_set('max_execution_time', 0);

        $start         = $this->input->post('start'); 
        $length        = $this->input->post('length'); 
        $searchValue   = $this->input->post('search')['value']; 
        $user_id = $this->session->userdata('user_id');
        
       
        $po_headers = $this->Po_model->get_pending_po_header();
        $result = array();
         // var_dump($po_headers);
         // exit();
        foreach($po_headers as $po){
           $hd_id = $po["hd_id"];
         //   $log_details = $this->Po_model->getPoLog($hd_id);
           $po["store"] = strtoupper($po["store"]);      
           $po["status"] = ($po["status"]==null) ? "ACTIVE" : $po["status"];

           
           if($searchValue=='')
              $result[] = $po;
           else{
              if((strpos(strtolower($po["store"]), strtolower($searchValue)) !== false || 
                 strpos(strtolower($po["vendor_code"]), strtolower($searchValue)) !== false || 
                 strpos(strtolower($po["document_no"]), strtolower($searchValue)) !== false || 
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


     function get_cancelled_po_list(){
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      $memory_limit = ini_get('memory_limit');
      ini_set('memory_limit',-1);
      ini_set('max_execution_time', 0);

      $start         = $this->input->post('start'); 
      $length        = $this->input->post('length'); 
      $searchValue   = $this->input->post('search')['value']; 
      $user_id = $this->session->userdata('user_id');
      // $emp_info    = $this->Account_model->get_user_info($user_id);
      // $is_ch   = ($emp_info[0]['user_type'] == 'category-head') ? true : false;
      
     
      $po_headers = $this->Po_model->get_cancelled_po_header();
      $result = array();

      foreach($po_headers as $po){
         $hd_id = $po["hd_id"];
       //   $log_details = $this->Po_model->getPoLog($hd_id);
         $po["store"] = strtoupper($po["store"]);      
         $po["status"] = ($po["status"]==null) ? "ACTIVE" : $po["status"];

         
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



     function get_partial_delivered_po_list(){
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      $memory_limit = ini_get('memory_limit');
      ini_set('memory_limit',-1);
      ini_set('max_execution_time', 0);

      $start         = $this->input->post('start'); 
      $length        = $this->input->post('length'); 
      $searchValue   = $this->input->post('search')['value']; 
      $user_id = $this->session->userdata('user_id');
      // $emp_info    = $this->Account_model->get_user_info($user_id);
      // $is_ch   = ($emp_info[0]['user_type'] == 'category-head') ? true : false;
      
     
      $po_headers = $this->Po_model->get_partial_delivered_po_header();
      $result = array();

      foreach($po_headers as $po){
         $hd_id = $po["hd_id"];
       //   $log_details = $this->Po_model->getPoLog($hd_id);
         $po["store"] = strtoupper($po["store"]);      
         $po["status"] = ($po["status"]==null) ? "ACTIVE" : $po["status"];

         
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


   function get_full_delivered_po_list(){
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      $memory_limit = ini_get('memory_limit');
      ini_set('memory_limit',-1);
      ini_set('max_execution_time', 0);

      $start         = $this->input->post('start'); 
      $length        = $this->input->post('length'); 
      $searchValue   = $this->input->post('search')['value']; 
      $user_id = $this->session->userdata('user_id');
      
     
      $po_headers = $this->Po_model->get_full_delivered_po_header();
      $result = array();

      foreach($po_headers as $po){
         $hd_id = $po["hd_id"];
       //   $log_details = $this->Po_model->getPoLog($hd_id);
         $po["store"] = strtoupper($po["store"]);      
         $po["status"] = ($po["status"]==null) ? "ACTIVE" : $po["status"];

         
         if($searchValue=='')
            $result[] = $po;
         else{
            if((strpos(strtolower($po["store"]), strtolower($searchValue)) !== false || 
               strpos(strtolower($po["vendor_code"]), strtolower($searchValue)) !== false || 
               strpos(strtolower($po["document_no"]), strtolower($searchValue)) !== false || 
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


   
   public function listPoLines(){
      if (!empty($_POST)) {
         $hd_id = $_POST["hd_id"];
         $list = $this->Po_model->getPoLines($hd_id);
         echo json_encode($list);
      }
   }


   function get_po_list(){
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      $memory_limit = ini_get('memory_limit');
      ini_set('memory_limit',-1);
      ini_set('max_execution_time', 0);

      $tab           = $this->input->post('tab');
      $start         = $this->input->post('start'); 
      $length        = $this->input->post('length'); 
      $searchValue   = $this->input->post('search')['value']; 
      $user_id = $this->session->userdata('user_id');
      
      $emp_info    = $this->Account_model->get_user_info($user_id);
      // $is_ch   = ($emp_info[0]['user_type'] == 'category-head') ? true : false;
      $user_type = $emp_info[0]['user_type'];
      if($tab=='noncas_po_tab'){
         $po_headers = $this->Po_model->get_noncas_po_header();
      } else if($tab=='cas_po_tab'){
         $po_headers = $this->Po_model->get_cas_po_header();
      } else{
         return;
      }
      $result = array();
       // var_dump($po_headers);
       // exit();
      foreach($po_headers as $po){
         $hd_id = $po["hd_id"];
       //   $log_details = $this->Po_model->getPoLog($hd_id);
         $po["store"] = strtoupper($po["store"]);      
         $po["status"] = ($po["status"]==null) ? "ACTIVE" : $po["status"];
         $po["user_type"] = $user_type;
         
         if($searchValue=='')
            $result[] = $po;
         else{
            if((strpos(strtolower($po["store"]), strtolower($searchValue)) !== false || 
               strpos(strtolower($po["vendor_code"]), strtolower($searchValue)) !== false || 
               strpos(strtolower($po["document_no"]), strtolower($searchValue)) !== false || 
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