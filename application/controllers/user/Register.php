<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->m_user->cek_login();
	}
 
	public function index()
	{
		$this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('user/v_register');
        $this->load->view('_layouts_admin/footer');
	}

	public function proses()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[tb_user.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$this->m_user->register($username,$password,$nama);
			$insert_id = $this->db->insert_id();
			$data_after = array('username' => $username, 'nama' => $nama);
			$this->load->library('audit_log');
			$this->audit_log->log('create', 'tb_user', $insert_id, null, $data_after);
			$this->session->set_flashdata('success_register','User berhasil didaftarkan!');
			redirect('user/register');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('user/register');
		}
	}
}