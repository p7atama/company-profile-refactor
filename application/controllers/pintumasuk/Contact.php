<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("m_contact","m_user"));
        $this->load->library('form_validation');
        $this->m_user->cek_login();
    }
 
    public function index() {
        $data['contact'] = $this->m_contact->index();
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/list_contact',$data);
        $this->load->view('_layouts_admin/footer');
    }

    function delete($id) {
        $before = (array) $this->m_contact->getById($id);
        $this->m_contact->delete($id);
        $this->load->library('audit_log');
        $this->audit_log->log('delete', 'tb_contact', $id, $before, null);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('pintumasuk/contact');
    }

    public function export_excel(){
        $tanggal = date('M-Y');
        $data = array( 'title' => 'Contact Us PT Padma Soode Indonesia' . '['.$tanggal.']',
            'contact' => $this->m_contact->getAll());
 
        $this->load->view('admin/laporan_excel_contact',$data);
    }
}