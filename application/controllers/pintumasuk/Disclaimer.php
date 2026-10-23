<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disclaimer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("m_disclaimer","m_user"));
        $this->load->library('form_validation','pdf');
        $this->m_user->cek_login();
    }
 
    public function index() {
        $data['disc'] = $this->m_disclaimer->getAll();
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/disclaimer',$data);
        $this->load->view('_layouts_admin/footer');
    }

   function delete($table,$where_id,$id) {
        $before = (array) $this->m_disclaimer->getById('tb_disclaimer','disclaimer',$id);
        $this->m_disclaimer->delete('tb_disclaimer','disclaimer',$id);
        $this->load->library('audit_log');
        $this->audit_log->log('delete', 'tb_disclaimer', $id, $before, null);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('pintumasuk/disclaimer');
    }

    public function edit($id) {
        $data['disclaimer'] = $this->m_disclaimer->getById('tb_disclaimer','disclaimer',$id);
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/edit_disclaimer',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function update() {
        $id = $this->input->post('id');
        $data['content'] = $this->input->post('content');                
        $before = (array) $this->m_disclaimer->getById('tb_disclaimer','disclaimer',$id);
        $this->m_disclaimer->update('tb_disclaimer','disclaimer',$data,$id);
        $this->load->library('audit_log');
        $this->audit_log->log('update', 'tb_disclaimer', $id, $before, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Update!');
         redirect('pintumasuk/disclaimer');  
    }}