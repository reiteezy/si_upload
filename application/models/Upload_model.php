<?php
class Upload_model extends CI_Model {

public function update_last_sequence_number($doc_no, $new_seq_number) {
}

public function save_upload_details($doc_no, $upload_type, $filename) {
    
    $data = array(
        'document_no' => $doc_no,
        'img_path' => $filename
    );
    if($upload_type == 'si_upload'){
        $this->db->insert('si_uploads', $data);
    } else {
        $this->db->insert('srr_uploads', $data);
    }
}

public function get_si_images_by_doc_no($doc_no) {
 
        $this->db->order_by('si_id', 'DESC');
        $this->db->select('img_path');
        $this->db->from('si_uploads');
        $this->db->where('document_no', $doc_no);
  
    $query = $this->db->get();

    return $query->result_array();
}

public function get_srr_images_by_doc_no($doc_no) {

    $this->db->order_by('srr_id', 'DESC');
    $this->db->select('img_path');
    $this->db->from('srr_uploads');
    $this->db->where('document_no', $doc_no);

$query = $this->db->get();

return $query->result_array();
}

public function check_file_exists($filename, $upload_type) {
    if($upload_type = 'si_upload'){
        $this->db->select('si_id'); 
        $this->db->from('si_uploads');
        $this->db->where('img_path', $filename);
        $query = $this->db->get();
    } else {
        $this->db->select('srr_id'); 
        $this->db->from('srr_uploads');
        $this->db->where('img_path', $filename);
        $query = $this->db->get();
    }

    if ($query->num_rows() > 0) {
        return true;
    } else {
        return false;
    }
}
}