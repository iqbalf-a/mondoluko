<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ektp_model extends CI_Model
{
    public function getEktpAll() {
        return $this->db->get(['ektp'])->result();
    }
    public function getEktpStatus() {
        return $this->db->get_where('ektp', ['user_id' => $this->session->userdata('id')])->result();
    }

    public function getEktpCatatan($id) {
        return $this->db->get_where('ektp_catatan', ['ektp_id' => $id])->row_array();
    }

    public function getEktpByUserId($id) {
        $userId = $this->session->userdata('id');
        return $this->db->query("Select * from ektp where id = '$id' and user_id = '$userId'")->row_array();
    }

    public function getEktpById($id) {
        return $this->db->query("Select * from ektp where id = '$id' ")->row_array();
    }

    public function inputCatatanEktp($id) {

        $data = [
            'ektp_id' => $id,
            'user_id' => $this->session->userdata('id'),
            'catatan' => $this->input->post('catatan'),
            'date_created' => time() + 60 * 60 * 7
        ];

        $this->db->insert('ektp_catatan', $data);
        redirect('admin/ektp_status');
    }
}
