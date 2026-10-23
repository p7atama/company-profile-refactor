<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_vacancy extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("m_career","m_user"));
        $this->load->library('form_validation','pdf');
        $this->m_user->cek_login();
    }
 
    public function index() {
        $data['career'] = $this->m_career->getAll();
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/job_vacancy',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function create() {
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/add_job_vacancy');
        $this->load->view('_layouts_admin/footer');
    }

    public function save() {
        $data['date'] = $this->input->post('date');
        $data['division_name'] = $this->input->post('division_name');
        $data['division_code'] = $this->input->post('division_code');
        $data['keterangan_job'] = $this->input->post('keterangan_job');
        $data['jabatan'] = $this->input->post('jabatan');        
        $data['last_degree'] = implode(', ', $this->input->post('last_degree'));
        $data['major'] = $this->input->post('major');
        $data['location'] = $this->input->post('location');
        $data['limit'] = $this->input->post('limit');
        $data['close'] = $this->input->post('close');
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan!');
        $this->m_career->save($data);
        $insert_id = $this->db->insert_id();
        $this->load->library('audit_log');
        $this->audit_log->log('create', 'tb_recruitment', $insert_id, null, $data);
        redirect('admin/job_vacancy');
    }

    public function edit($id) {
        $data['career'] = $this->m_career->getById($id);
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/edit_job_vacancy',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function update() {
        $id = $this->input->post('id');
        $data['date'] = $this->input->post('date');
        $data['division_name'] = $this->input->post('division_name');
        $data['division_code'] = $this->input->post('division_code');
        $data['keterangan_job'] = $this->input->post('keterangan_job');
        $data['jabatan'] = $this->input->post('jabatan');        
        $data['last_degree'] = implode(', ', $this->input->post('last_degree'));
        $data['major'] = $this->input->post('major');
        $data['limit'] = $this->input->post('limit');
        $data['location'] = $this->input->post('location');
        $data['close'] = $this->input->post('close');
                
        $before = (array) $this->m_career->getById($id);
        $this->m_career->update($data,$id);
        $this->load->library('audit_log');
        $this->audit_log->log('update', 'tb_recruitment', $id, $before, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Update!');
         redirect('admin/job_vacancy');  
    }

    function delete($id) {
        $before = (array) $this->m_career->getById($id);
        $this->m_career->delete($id);
        $this->load->library('audit_log');
        $this->audit_log->log('delete', 'tb_recruitment', $id, $before, null);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/job_vacancy');
    }

    public function print_job_vacancy($id) {
        $data['career'] = $this->m_career->getById($id);
        // $this->load->library('pdf');
        // $this->pdf->setPaper('A4', 'potrait');
        // $this->pdf->filename = "Lowongan kerja - PT Padma Soode Indonesia.pdf";
        // $this->pdf->load_view('admin/cetak_coba', $data);
        $this->load->view('admin/cetak_coba', $data);
    }
}