<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('temp_login/v_login');
	}

	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('m_auth');
		$this->m_auth->_login($username, $password);
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('auth');
	}
}
