<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Upload_model');
        $this->load->helper('file');
        $this->load->library('upload');
    }

   

    public function upload_images() {
      
        if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
            $data = [];
            $files = $_FILES;
            $doc_no = (string) $this->input->post('doc_no_val');
            $number_of_files = count($_FILES['images']['name']);
            $config['upload_path'] = '\\\\172.16.161.206\\MMS_Txt\\SI';
            // $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // Set max size to 2MB (2048 KB)
    
            // $last_seq_number = $this->Upload_model->get_last_sequence_number($doc_no);
    
            for ($i = 0; $i < $number_of_files; $i++) {
    
                do {
                    $random_number = str_pad(rand(0, 9999999), 7, '0', STR_PAD_LEFT);
    
                    $new_filename = $doc_no . '_si_' . $random_number . '.' . pathinfo($files['images']['name'][$i], PATHINFO_EXTENSION);
    
                    $file_exists = $this->Upload_model->check_file_exists($new_filename);
                } while ($file_exists);
    
                $_FILES['images']['name'] = $new_filename;
                $_FILES['images']['type'] = $files['images']['type'][$i];
                $_FILES['images']['tmp_name'] = $files['images']['tmp_name'][$i];
                $_FILES['images']['error'] = $files['images']['error'][$i];
                $_FILES['images']['size'] = $files['images']['size'][$i];
    
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('images')) {
                    $upload_data = $this->upload->data();
                    $data['uploads'][$i] = $upload_data;
                    $this->Upload_model->save_upload_details($doc_no, $upload_data['file_name']);
                    $data['status'] = 'success';
                    $data['message'] = 'Image/s uploaded successfully!';
                } else {
                    $data['errors'][$i] = $this->upload->display_errors();
                    $data['status'] = 'error';
                    $data['message'] = 'Failed to upload image/s.';
                }
            }
    
        } else {
            $data['errors'][] = "No files were selected for upload.";
            $data['status'] = 'none';
            $data['message'] = 'No files were selected for upload.';
        }
    
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    
  

    function image($image_name){
        $userpass = 'public';
        $directory = '\\\\172.16.161.206\\MMS_Txt\\SI\\';
        system("net use {$directory} /user:{$userpass} {$userpass} >nul");
        $networkPath = '\\\\172.16.161.206\\MMS_Txt\\SI\\'.$image_name;
        // Check if the file exists
        if (file_exists($networkPath)) {
            // Set the content type header based on the file type
            header('Content-Type: image/jpeg');
            // Read and output the file
            readfile($networkPath);
            exit;
        } else {
            // Handle file not found error
            http_response_code(404);
            echo "File not found.";
        } 
    } 



    public function view_images($doc_no) {
       
        $images = $this->Upload_model->get_images_by_doc_no($doc_no);
    
        $output = '';
        if (!empty($images)) {
            foreach ($images as $image) {
                // $img_url = base_url('uploads/' . $image['img_path']);
                // $img_url = '//172.16.161.206/MMS_Txt/SI/' . $image['img_path'];
                // $img_url = 'http://172.16.161.206/network_images/' . $image['img_path'];
                $img_url = base_url('UploadController/image/' . $image['img_path']);
                // echo '<pre>';
                // print_r($img_url);
                // echo '<pre>';
                // exit();
                $output .= '
                    <div class="col-md-2 col-sm-6 gallery-item">
                        <img src="' . $img_url . '" alt="Gallery Image" class="img-fluid" onclick="viewSiModal(this)" data-img-src="' . $img_url . '" width="500" height="600">
                    </div>';
            }
        } else {
            $output .= '<p>No images uploaded for this document number.</p>';
        }
    
        echo $output; 
    }
}