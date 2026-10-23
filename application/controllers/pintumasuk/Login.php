<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
	function __construct() {
		parent::__construct();
		$this->load->model('m_user');
	}
 
	public function index()
	{
		$this->load->view('user/v_login');
	}
 
	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->m_user->login_user($username,$password))
		{
			redirect('admin/dashboard');
		}
		else
		{
			$this->session->set_flashdata('error','Username atau password salah');
			redirect('user/login');
		}
	}
 
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('Login');
	}
 
	
 
}