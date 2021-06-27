<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->helper('string');
	}

	public function index()
	{
        $data['title'] = "Dashboard";
		$this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/navbar');
        $this->load->view('profile');
        $this->load->view('templates/dashboard/footer');

	}

    public function ektp_pembuatan()
    {
        $data['title'] = "Pembuatan E-KTP";
        // echo random_string('alnum', 8); die;
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/navbar');
        $this->load->view('e-ktp_pembuatan');
        $this->load->view('templates/dashboard/footer');
    }

    public function ektp_status()
    {
        $data['title'] = "Status E-KTP";
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/navbar');
        $this->load->view('e-ktp_status');
        $this->load->view('templates/dashboard/footer');
    }

}
