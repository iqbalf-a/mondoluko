<?php defined('BASEPATH') OR exit('No direct script access allowed');

class kk_model extends CI_Model
{
    public function getKkAll() {
        return $this->db->get(['kk'])->result();
    }
    public function getKkStatus() {
        return $this->db->get_where('kk', ['user_id' => $this->session->userdata('id')])->result();
    }

    public function getKkCatatan($id) {
        return $this->db->get_where('kk_catatan', ['kk_id' => $id])->row_array();
    }

    public function getKkByUserId($id) {
        $userId = $this->session->userdata('id');
        return $this->db->query("Select * from kk where id = '$id' and user_id = '$userId'")->row_array();
    }

    public function getKkById($id) {
        return $this->db->query("Select * from kk where id = '$id' ")->row_array();
    }

    public function inputCatatanKk($id) {

        $data = [
            'kk_id' => $id,
            'user_id' => $this->session->userdata('id'),
            'catatan' => $this->input->post('catatan'),
            'date_created' => time() + 60 * 60 * 7
        ];

        $this->db->insert('kk_catatan', $data);
        redirect('admin/kk_status');
    }
}
