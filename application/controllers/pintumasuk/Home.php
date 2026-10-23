<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("m_home","m_user"));
        $this->load->library('form_validation');
        $this->load->helper('url','form');
        $this->m_user->cek_login();
    }
 
    public function index() {
        $data['home'] = $this->m_home->getAll();
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/home',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function create() {
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/add_home');
        $this->load->view('_layouts_admin/footer');
    }

    public function save() {
        $this->load->library('upload','config');
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        for($i=0; $i<$cpt; $i++) 
        {           
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload();
            $dataInfo[] = $this->upload->data();
        }

        $data = array(
            'text' => $this->input->post('text'),
            'about' => $this->input->post('about'),
            'slider1' => $dataInfo[0]['file_name'],
            'slider2' => $dataInfo[1]['file_name'],
            'slider3' => $dataInfo[2]['file_name'],
            'client1' => $dataInfo[3]['file_name'],
            'client2' => $dataInfo[4]['file_name'],
            'client3' => $dataInfo[5]['file_name'],
            'client4' => $dataInfo[6]['file_name'],
            'client5' => $dataInfo[7]['file_name'],
            'client6' => $dataInfo[8]['file_name'],
        );
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan!');
        $this->m_home->save($data);
        $insert_id = $this->db->insert_id();
        $this->load->library('audit_log');
        $this->audit_log->log('create', 'tb_home', $insert_id, null, $data);
        redirect('pintumasuk/home');
    }

    private function set_upload_options() 
    {   
        $config = array();
        $config['upload_path'] = './uploads/home';
        $config['allowed_types'] = 'jpg|png|pdf';
        $config['max_size']      = 2048;
        $config['max_width']      = '10240';
        $config['max_height']      = '7680';
        $config['overwrite']     = FALSE;
        return $config;
    }


    public function edit($id) {
        $data['home'] = $this->m_home->getById($id);
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/edit_home',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function update($id) {
        $this->load->library('upload');
        $dataInfo   = array();
        $files      = $_FILES;
        $cpt        = count($_FILES['userfile']['name']);
        for($i=0; $i<$cpt; $i++) 
        {           
            $_FILES['userfile']['name']     = $files['userfile']['name'][$i];
            $_FILES['userfile']['type']     = $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']    = $files['userfile']['error'][$i];
            $_FILES['userfile']['size']     = $files['userfile']['size'][$i];    

            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload(); 
            $dataInfo[] = $this->upload->data();
        }

        $data = array(
            //'id'        => $this->input->post('id'),
            'text'      => $this->input->post('text'),
            'about'     => $this->input->post('about'),
            'slider1' => ($dataInfo[0]['file_name'] == '' ? $this->input->post('slider1') : $dataInfo[0]['file_name']),
            'slider2' => ($dataInfo[1]['file_name'] == '' ? $this->input->post('slider2') : $dataInfo[1]['file_name']),
            'slider3' => ($dataInfo[2]['file_name'] == '' ? $this->input->post('slider3') : $dataInfo[2]['file_name']),
            'slider4' => ($dataInfo[3]['file_name'] == '' ? $this->input->post('slider4') : $dataInfo[3]['file_name']),
            'slider5' => ($dataInfo[4]['file_name'] == '' ? $this->input->post('slider5') : $dataInfo[4]['file_name']),
            'slider6' => ($dataInfo[5]['file_name'] == '' ? $this->input->post('slider6') : $dataInfo[5]['file_name']),
            'slider7' => ($dataInfo[6]['file_name'] == '' ? $this->input->post('slider7') : $dataInfo[6]['file_name']),
            'slider8' => ($dataInfo[7]['file_name'] == '' ? $this->input->post('slider8') : $dataInfo[7]['file_name']),
        );                
        $before = (array) $this->m_home->getById($id);
        $this->m_home->update($data,$id);
        $this->load->library('audit_log');
        $this->audit_log->log('update', 'tb_home', $id, $before, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Update!');

        redirect('pintumasuk/home');  
    }

    

    function delete($id) {
        $before = (array) $this->m_home->getById($id);
        $this->m_home->delete($id);
        $this->load->library('audit_log');
        $this->audit_log->log('delete', 'tb_home', $id, $before, null);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('pintumasuk/home');
    }
}