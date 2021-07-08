<?php defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_model extends CI_Model
{
    public function doUploadEktp($data) {
        $this->load->helper('string');
        $userId = $this->session->userdata('id');
        $data = [
            'user_id' => $userId,
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'file1' => $this->_uploadFile('ektp_file1', 'ektp'),
            'file2' => $this->_uploadFile('ektp_file2', 'ektp'),
            'file3' => $this->_uploadFile('ektp_file3', 'ektp'),
            'file4' => $this->_uploadFile('ektp_file4', 'ektp'),
            'file5' => $this->_uploadFile('ektp_file5', 'ektp'),
            'file6' => $this->_uploadFile('ektp_file6', 'ektp'),
            'file7' => $this->_uploadFile('ektp_file7', 'ektp'),
            'file8' => $this->_uploadFile('ektp_file8', 'ektp'),
            'kode' => "EKTP" . random_string('alnum', 5),
            'status' => '2',
            'date_created' => time() + 60 * 60 * 7
        ];
        // var_dump($data['file1'], $data['kode']); die;
        $this->db->insert('ektp', $data);
        redirect('dashboard/ektp_status');
    }

    private function _uploadFile($inputName, $foldername) {
        $config['upload_path']          = './file/'.$foldername.'/';
        $config['allowed_types']        = 'pdf|jpg|png|jpeg';
        // $config['file_name']            = uniqid();
        $config['encrypt_name']         = true;
        // $config['overwrite']		    = true;
        $config['max_size']             = 10240; // 10MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($inputName)) {
          return $this->upload->data("file_name");
        }


    }

}
