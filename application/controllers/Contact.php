<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Contact extends CI_Controller {
 
	 public function __construct(){
		 parent::__construct();
		 $this->load->helper('url');
		 $this->load->model("m_contact",'cm');
		 $this->load->library('form_validation');
		 }

	 public function index(){ 
		 $this->load->view('_layouts/v_navbar');
		 $this->load->view('contact');
		 $this->load->view('_layouts/v_footer');
		 }

	 public function add()
    {
    	if($this->input->post('simpan')){
    		$data_contact = isset($_POST['user']) ? $_POST['user'] : array();
    		$this->cm->tambah('tb_contact');
    		$this->load->library('audit_log');
    		$this->audit_log->log('create', 'tb_contact', null, null, $data_contact);
    		$this->session->set_flashdata('success', 'Pesan berhasil dikirim!');
    		redirect('contact/index');
    	}
    }
}