<?php

class List_of_applicants extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array("m_recruitment_none_approve","m_user"));
        $this->load->library('form_validation');
        $this->m_user->cek_login();
    }
 
	public function index()
	{
        // load view admin/overview.php
        $data['recruitment'] = $this->m_recruitment_none_approve->index();
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/list_applicants',$data);
        $this->load->view('_layouts_admin/footer');
	}

    public function view($id)
    {
        $data['recruitment'] = $this->m_recruitment_none_approve->getById($id);
        $data['id'] = $id;
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/view_apply',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function save($id){
        //$id = $this->input->post('id');
        $data = array(
            'status' => $this->input->post('status'),
            'confirm_by' => $this->input->post('confirm_by'),
            'confirm_date' => $this->input->post('confirm_date'),
            'note' => $this->input->post('note'),
            'status_print' => $this->input->post('status_print'),
        );
        $before = (array) $this->m_recruitment_none_approve->getById($id);
        $this->m_recruitment_none_approve->update($data,$id);
        $this->load->library('audit_log');
        $this->audit_log->log('update', 'tb_pelamar', $id, $before, $data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect('admin/list_of_applicants');
    }

	function delete($id) {
        $before = (array) $this->m_recruitment_none_approve->getById($id);
        $this->m_recruitment_none_approve->delete($id);
        $this->load->library('audit_log');
        $this->audit_log->log('delete', 'tb_pelamar', $id, $before, null);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/list_of_applicants');
    }

    public function export_excel(){
        $tanggal = date('M-Y');
        $data = array( 'title' => 'Data Pelamar PT Padma Soode Indonesia' . '['.$tanggal.']',
            'recruitment' => $this->m_recruitment_none_approve->index());
 
        $this->load->view('admin/applicants_excel_report',$data);
    }
}