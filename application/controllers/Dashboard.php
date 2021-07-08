<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->helper('string');
        $this->load->model('user_model');
        $this->load->model('dashboard_model');
        $this->load->model('ektp_model');
        $this->load->model('kk_model');
    }

    public function index()
    {

        $data['title'] = "Dashboard";
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/navbar');
        $this->load->view('dashboard/profile');
        $this->load->view('templates/dashboard/footer');
    }

    public function ektp_pembuatan()
    {
        $data['title'] = "Pembuatan E-KTP";
        $data['user'] = $this->user_model->getUser();
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        // echo random_string('alnum', 8); die;


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dashboard/header', $data);
            $this->load->view('templates/dashboard/navbar');
            $this->load->view('dashboard/e-ktp_pembuatan');
            $this->load->view('templates/dashboard/footer');
        } else {
            $this->dashboard_model->doUploadEktp($data);
            redirect('dashboard');
        }
    }

    public function ektp_status()
    {
        $data['title'] = "Status Pengajuan E-KTP";
        $data['status'] = $this->ektp_model->getEktpStatus();
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/navbar');
        $this->load->view('dashboard/e-ktp_status', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function ektp_detail($id)
    {
        $data['title'] = "Detail Pengajuan E-KTP";
        $data['detail'] = $this->ektp_model->getEktpByUserId($id);
        $data['catatan'] = $this->ektp_model->getEktpCatatan($id);
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/navbar');
        $this->load->view('dashboard/e-ktp_detail', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function viewFile($fileName)
    {
        if($fileName == NULL) {
            // redirect('dashboard/ektp_status');
        } else {
            $tofile= realpath("file/ektp/".$fileName);
            header('Content-Type: application/pdf');
            readfile($tofile);
        }


    }

    public function kk_pembuatan()
    {
        $data['title'] = "Pembuatan KK";
        $data['user'] = $this->user_model->getUser();
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        // echo random_string('alnum', 8); die;


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dashboard/header', $data);
            $this->load->view('templates/dashboard/navbar');
            $this->load->view('dashboard/kk_pembuatan');
            $this->load->view('templates/dashboard/footer');
        } else {
            $this->dashboard_model->doUploadKk($data);
            redirect('dashboard');
        }
    }

    public function kk_status()
    {
        $data['title'] = "Status Pengajuan KK";
        $data['title2'] = "KK";
        $data['status'] = $this->kk_model->getKkStatus();
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/navbar');
        $this->load->view('dashboard/kk_status', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function kk_detail($id)
    {
        $data['title'] = "Detail Pengajuan E-KTP";
        $data['title2'] = "KK";
        $data['detail'] = $this->kk_model->getKkByUserId($id);
        $data['catatan'] = $this->kk_model->getKkCatatan($id);

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/navbar');
        $this->load->view('dashboard/kk_detail', $data);
        $this->load->view('templates/dashboard/footer');
    }
}
