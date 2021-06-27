<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{

		if ($this->session->userdata('email')) {
			redirect('home');
		}
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = "Masuk";
			$this->load->view('templates/header');
			$this->load->view('templates/auth/login');
			$this->load->view('templates/footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		//cek jika ada
		if ($user) {
			// verifikasi password
			if (password_verify($password, $user['password'])) {
				//password berhasil
				$data = [
					'id' => $user['id'],
					'name' => $user['name'],
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				//cek role id
				if ($user['role_id'] == 1) {
					redirect('dashboard');
				} else {
					redirect('home');
				}
			} else {
				//password gagal
				$this->session->set_flashdata('message', '<div class="alert alert-danger">
				<div class="container">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<i class="nc-icon nc-simple-remove"></i>
				  </button>
				  <span> Password salah </span>
				</div>
			  </div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">
			<div class="container">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<i class="nc-icon nc-simple-remove"></i>
			  </button>
			  <span> Email belum terdaftar </span>
			</div>
		  </div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		if ($this->session->userdata('email')) {
			redirect('home');
		}

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email sudah terdaftar'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Daftar';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/auth/register');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => '2',
				'date_created' => time() + 60 * 60 * 6
			];

			$this->db->insert('user', $data);

			$this->session->set_flashdata('message', '<div class="alert alert-danger">
			<div class="container">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<i class="nc-icon nc-simple-remove"></i>
			  </button>
			  <span> Email belum terdaftar </span>
			</div>
		  </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success">
        <div class="container">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="nc-icon nc-simple-remove"></i>
          </button>
          <span>Anda berhasil keluar </span>
        </div>
      </div>');
		redirect('auth');
	}
}
