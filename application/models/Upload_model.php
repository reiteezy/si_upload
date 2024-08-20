<?php
class Upload_model extends CI_Model {

public function get_last_sequence_number($doc_no) {
    $this->db->select('MAX(CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(img_path, "_si_", -1), ".", 1) AS UNSIGNED)) as last_seq');
    $this->db->from('si_uploads');
    $this->db->where('document_no', $doc_no);
    $query = $this->db->get();
    $result = $query->row();

    return $result->last_seq ? $result->last_seq : 0;
}

public function update_last_sequence_number($doc_no, $new_seq_number) {
}

public function save_upload_details($doc_no, $filename) {
    $data = array(
        'document_no' => $doc_no,
        'img_path' => $filename
    );
    $this->db->insert('si_uploads', $data);
}

public function get_images_by_doc_no($doc_no) {
    $this->db->order_by('si_id', 'DESC');
    $this->db->select('img_path');
    $this->db->from('si_uploads');
    $this->db->where('document_no', $doc_no);
    $query = $this->db->get();

    return $query->result_array();
}

public function check_file_exists($filename) {
    $this->db->select('si_id'); 
    $this->db->from('si_uploads');
    $this->db->where('img_path', $filename);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return true;
    } else {
        return false;
    }
}
}