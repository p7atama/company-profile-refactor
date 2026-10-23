<?php

class List_of_applicants_approved extends CI_Controller {
    public function __construct() { 
        parent::__construct();
        $this->load->model(array("m_recruitment_approved","m_user"));
        $this->load->model(array("m_recruitment_none_approve"));
        $this->load->library('form_validation');
        $this->m_user->cek_login();
    }

	public function index()
	{
        // load view admin/overview.php
        $data['recruitment'] = $this->m_recruitment_approved->index();
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/list_of_applicants_approved',$data);
        $this->load->view('_layouts_admin/footer');
	}

    public function view($id)
    {
        $data['recruitment'] = $this->m_recruitment_approved->getById($id);
        $data['id'] = $id;
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/view_apply',$data);
        $this->load->view('_layouts_admin/footer');
    }

	function delete($id) {
        $before = (array) $this->m_recruitment_approved->getById($id);
        $this->m_recruitment_approved->delete($id);
        $this->load->library('audit_log');
        $this->audit_log->log('delete', 'tb_pelamar', $id, $before, null);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/list_of_applicants_approved');
    }

    public function export_excel(){
        $tanggal = date('M-Y');
        $data = array( 'title' => 'Data Pelamar [APPROVE] PT Padma Soode Indonesia' . '['.$tanggal.']',
            'recruitment' => $this->m_recruitment_approved->index());
 
        $this->load->view('admin/applicants_excel_report',$data);
    }

    public function print_data($id) {
        $data = array(
            'status_print' => 'Sudah Print',
        );
        $before = (array) $this->m_recruitment_approved->getById($id);
        $this->m_recruitment_approved->update($data,$id);
        $this->load->library('audit_log');
        $this->audit_log->log('update', 'tb_pelamar', $id, $before, $data);
        $data['recruitment'] = $this->m_recruitment_approved->getById($id);
        $this->load->view('admin/cetak_data', $data);
    }
}