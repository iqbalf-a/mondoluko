<?php defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model
{
    public function getuser() {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }
}
