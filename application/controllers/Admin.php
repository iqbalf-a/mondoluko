<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('ektp_model');
        $this->load->model('kk_model');
    }

    public function index()
    {

        $data['title'] = "Dashboard";
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('dashboard/profile');
        $this->load->view('templates/dashboard/footer');
    }

    // ektp
    public function ektp_status()
    {
        $data['title'] = "Status Pengajuan E-KTP";
        $data['status'] = $this->ektp_model->getEktpAll();
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('admin/e-ktp_status', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function ektp_detail($id)
    {
        $data['title'] = "Detail Pengajuan E-KTP";
        $data['detail'] = $this->ektp_model->getEktpById($id);
        $data['catatan'] = $this->ektp_model->getEktpCatatan($id);
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('admin/e-ktp_detail', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function persetujuan_ektp($id)
    {

        // var_dump($this->input->post('submit_action'), $id, $this->input->post('catatan')); die;
        if ($this->input->post('submit_action') == 'Terima') {
            $status = 1;
        } else {
            $status = 0;
        }
        $data = array(
            'status' => $status
        );

        $this->db->where('id', $id);
        $this->db->update('ektp', $data);

        $this->ektp_model->inputCatatanEktp($id);
    }

    // kk
    public function kk_status()
    {
        $data['title'] = "Status Pengajuan E-KTP";
        $data['title2'] = "KK";
        $data['status'] = $this->kk_model->getKkAll();
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('admin/kk_status', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function kk_detail($id)
    {
        $data['title'] = "Detail Pengajuan E-KTP";
        $data['title2'] = "KK";
        $data['detail'] = $this->kk_model->getKkById($id);
        $data['catatan'] = $this->kk_model->getKkCatatan($id);
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/admin/navbar');
        $this->load->view('admin/kk_detail', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function persetujuan_kk($id)
    {

        // var_dump($this->input->post('submit_action'), $id, $this->input->post('catatan')); die;
        if ($this->input->post('submit_action') == 'Terima') {
            $status = 1;
        } else {
            $status = 0;
        }
        $data = array(
            'status' => $status
        );

        $this->db->where('id', $id);
        $this->db->update('kk', $data);

        $this->kk_model->inputCatatanKk($id);
    }


}
