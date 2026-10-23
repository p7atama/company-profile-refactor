<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("m_faq","m_user"));
        $this->load->library('form_validation','pdf');
        $this->m_user->cek_login();
    }
 
    public function index() {
        $data['faq'] = $this->m_faq->getAll();
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/faq',$data);
        $this->load->view('_layouts_admin/footer');
    }

   public function create_faq() {
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/add_faq');
        $this->load->view('_layouts_admin/footer');
    }

    public function add_faq() {
        $data['question'] = $this->input->post('question');
        $data['answer'] = $this->input->post('answer');
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan!');
        $this->m_faq->save($data);
        $insert_id = $this->db->insert_id();
        if ($insert_id === 0 || $insert_id === null) {
            $row = $this->db->query('SELECT id_faq FROM tb_faq ORDER BY id_faq DESC LIMIT 1')->row();
            $insert_id = $row ? (int) $row->id_faq : 0;
        }
        $this->load->library('audit_log');
        $this->audit_log->log('create', 'tb_faq', $insert_id, null, $data);
        redirect('pintumasuk/faq');
    }
    public function edit_faq($id) {
        $data['faq'] = $this->m_faq->getById('tb_faq','faq',$id);
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/edit_faq',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function update_faq() {
        $id = $this->input->post('id');
        $data['question'] = $this->input->post('question');
        $data['answer'] = $this->input->post('answer');                     
        $before = (array) $this->m_faq->getById('tb_faq','faq',$id);
        $this->m_faq->update('tb_faq','faq',$data,$id);
        $this->load->library('audit_log');
        $this->audit_log->log('update', 'tb_faq', $id, $before, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Update!');
         redirect('pintumasuk/faq');  
    }

    function delete_faq($table,$where_id,$id) {
        $before = (array) $this->m_faq->getById('tb_faq','faq',$id);
        $this->m_faq->delete('tb_faq','faq',$id);
        $this->load->library('audit_log');
        $this->audit_log->log('delete', 'tb_faq', $id, $before, null);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('pintumasuk/faq');
    }
}