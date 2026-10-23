<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vision_mission extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("m_vision_mission","m_user"));
        $this->load->library('form_validation');
        $this->m_user->cek_login();
    }
 
    public function index() {
        $data['vision_mission'] = $this->m_vision_mission->getAll();
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/vision_mission',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function create() {
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/add_vision_mission');
        $this->load->view('_layouts_admin/footer');
    }

    public function save() {
        $data['vision'] = $this->input->post('vision');
        $data['mission'] = $this->input->post('mission');
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan!');
        $this->m_vision_mission->save($data);
        $insert_id = $this->db->insert_id();
        $this->load->library('audit_log');
        $this->audit_log->log('create', 'tb_vision_mission', $insert_id, null, $data);
        redirect('pintumasuk/vision_mission');
    }

    public function edit($id) {
        $data['vision_mission'] = $this->m_vision_mission->getById($id);
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/edit_vision_mission',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function update() {
        $id = $this->input->post('id');
        $data['vision'] = $this->input->post('vision');
        $data['mission'] = $this->input->post('mission');                
        $before = (array) $this->m_vision_mission->getById($id);
        $this->m_vision_mission->update($data,$id);
        $this->load->library('audit_log');
        $this->audit_log->log('update', 'tb_vision_mission', $id, $before, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Update!');
         redirect('pintumasuk/vision_mission');  
    }

    function delete($id) {
        $before = (array) $this->m_vision_mission->getById($id);
        $this->m_vision_mission->delete($id);
        $this->load->library('audit_log');
        $this->audit_log->log('delete', 'tb_vision_mission', $id, $before, null);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('pintumasuk/vision_mission');
    }
}