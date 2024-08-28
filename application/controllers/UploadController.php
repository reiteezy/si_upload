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
            $userpass = 'public';
            $doc_no = (string) $this->input->post('doc_no_val');
            $number_of_files = count($_FILES['images']['name']);
            $upload_type = $this->input->post('uploadType');
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            if($upload_type == 'si_upload'){
                $directory = '\\\\172.16.161.206\\MMS_Txt\\SI';
                system("net use {$directory} /user:{$userpass} {$userpass} >nul");
                $config['upload_path'] = '\\\\172.16.161.206\\MMS_Txt\\SI';
                
            } else {
                $directory = '\\\\172.16.161.206\\MMS_Txt\\SRR';
                system("net use {$directory} /user:{$userpass} {$userpass} >nul");
                $config['upload_path'] = '\\\\172.16.161.206\\MMS_Txt\\SRR';
            }

            if($upload_type == 'si_upload'){
            for ($i = 0; $i < $number_of_files; $i++) {
    
                do {
                    $random_number = str_pad(rand(0, 9999999), 7, '0', STR_PAD_LEFT);
    
                    $new_filename = $doc_no . '_SI' . $random_number . '.' . pathinfo($files['images']['name'][$i], PATHINFO_EXTENSION);
    
                    $file_exists = $this->Upload_model->check_file_exists($new_filename, $upload_type);
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
                    $this->Upload_model->save_upload_details($doc_no, $upload_type, $upload_data['file_name']);
                    $data['status'] = 'success';
                    $data['message'] = 'SI uploaded successfully!';
                } else {
                    $data['errors'][$i] = $this->upload->display_errors();
                    $data['status'] = 'error';
                    $data['message'] = 'Failed to upload SI.';
                }
            }
        } else {
            for ($i = 0; $i < $number_of_files; $i++) {
    
                do {
                    $random_number = str_pad(rand(0, 9999999), 7, '0', STR_PAD_LEFT);
    
                    $new_filename = $doc_no . '_SRR' . $random_number . '.' . pathinfo($files['images']['name'][$i], PATHINFO_EXTENSION);
    
                    $file_exists = $this->Upload_model->check_file_exists($new_filename, $upload_type);
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
                    $this->Upload_model->save_upload_details($doc_no, $upload_type, $upload_data['file_name']);
                    $data['status'] = 'success';
                    $data['message'] = 'SRR uploaded successfully!';
                } else {
                    $data['errors'][$i] = $this->upload->display_errors();
                    $data['status'] = 'error';
                    $data['message'] = 'Failed to upload SRR.';
                }
            }
        }
        } else {
            $data['errors'][] = "No files were selected for upload.";
            $data['status'] = 'none';
            $data['message'] = 'No files were selected for upload.';
        }
    
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    
   

    function si_image($image_name){
        $userpass = 'public';
        $directory = '\\\\172.16.161.206\\MMS_Txt\\SI\\';
        system("net use {$directory} /user:{$userpass} {$userpass} >nul");
        $networkPath = '\\\\172.16.161.206\\MMS_Txt\\SI\\'.$image_name;
        if (file_exists($networkPath)) {
            header('Content-Type: image/jpeg');
            readfile($networkPath);
            exit;
        } else {
            // Handle file not found error
            http_response_code(404);
            echo "File not found.";
        } 
    } 


    function srr_image($image_name){
        $userpass = 'public';
        $directory = '\\\\172.16.161.206\\MMS_Txt\\SRR\\';
        system("net use {$directory} /user:{$userpass} {$userpass} >nul");
        $networkPath = '\\\\172.16.161.206\\MMS_Txt\\SRR\\'.$image_name;
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


    public function view_si_images($doc_no) {
        $images = $this->Upload_model->get_si_images_by_doc_no($doc_no);
    
        $output = '';
        if (!empty($images)) {
            foreach ($images as $image) {
                $img_url = base_url('UploadController/si_image/' . $image['img_path']);
                $delete_url = base_url('UploadController/delete_si_image/' . $image['img_path']);
    
                $output .= '
                    <div class="col-md-2 col-sm-6 gallery-item">
                        <div class="image-container">
                            <img src="' . $img_url . '" alt="Gallery Image" class="img-fluid" onclick="viewSiImg(this)" data-img-src="' . $img_url . '" width="500" height="600">
                            <button type="button" title="Delete" class="btn-close" onclick="deleteImage(\'' . $delete_url . '\',\'' . $doc_no . '\')"></button>
                        </div>
                    </div>';
            }
        } else {
            $output .= '<p>No SI uploaded for this document number.</p>';
        }
    
        echo $output; 
    }
    
    
    public function view_srr_images($doc_no) {
        $images = $this->Upload_model->get_srr_images_by_doc_no($doc_no);
        $imgType = 'srr';
        $output = '';
        if (!empty($images)) {
            foreach ($images as $image) {
              
                $img_url = base_url('UploadController/srr_image/' . $image['img_path']);
                $delete_url = base_url('UploadController/delete_srr_image/' . $image['img_path']);
    
                $output .= '
                <div class="col-md-2 col-sm-6 gallery-item">
                    <div class="image-container">
                        <img src="' . $img_url . '" alt="Gallery Image" class="img-fluid" onclick="viewSiImg(this)" data-img-src="' . $img_url . '" width="500" height="600">
                        <button type="button" title="Delete" class="btn-close" onclick="deleteImage(\'' . $delete_url . '\',\'' . $doc_no . '\',\'' . $imgType . '\')"></button>
                    </div>
                </div>';
            }
        } else {
            $output .= '<p>No SRR uploaded for this document number.</p>';
        }
    
        echo $output; 
    }


    public function delete_si_image($img_path) {
        $userpass = 'public';
        $directory = '\\\\172.16.161.206\\MMS_Txt\\SI\\';
        system("net use {$directory} /user:{$userpass} {$userpass} >nul");
        $networkPath = '\\\\172.16.161.206\\MMS_Txt\\SI\\' . $img_path;
    
        if (file_exists($networkPath)) {
            if (unlink($networkPath)) {
                $this->Upload_model->delete_si_image_by_path($img_path);
                
                $response = [
                    'status' => 'success',
                    'message' => 'Image deleted successfully!'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to delete the image file.'
                ];
            }
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Image file not found.'
            ];
        }
    
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
    

    public function delete_srr_image($img_path) {
        $userpass = 'public';
        $directory = '\\\\172.16.161.206\\MMS_Txt\\SRR\\';
        system("net use {$directory} /user:{$userpass} {$userpass} >nul");
        $networkPath = '\\\\172.16.161.206\\MMS_Txt\\SRR\\' . $img_path;
    
        if (file_exists($networkPath)) {
            if (unlink($networkPath)) {
                $this->Upload_model->delete_srr_image_by_path($img_path);
                
                $response = [
                    'status' => 'success',
                    'message' => 'Image deleted successfully!'
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to delete the image file.'
                ];
            }
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Image file not found.'
            ];
        }
    
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

}