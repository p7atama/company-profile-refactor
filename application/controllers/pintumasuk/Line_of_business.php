<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Line_of_business extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("m_lob","m_user"));
        $this->load->library('form_validation');
        $this->m_user->cek_login();
    }
 
    public function index() {
        $data['line_of_business'] = $this->m_lob->getAll();
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/line_of_business',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function create() {
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/add_line_of_business');
        $this->load->view('_layouts_admin/footer');
    }

    public function save() {
        $this->load->library('upload');
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

        //Insert data ke database
        $data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'product1_name' => $this->input->post('product1_name'),
            'product2_name' => $this->input->post('product2_name'),
            'product3_name' => $this->input->post('product3_name'),
            'product4_name' => $this->input->post('product4_name'),
            'product5_name' => $this->input->post('product5_name'),
            'product6_name' => $this->input->post('product6_name'),

            'machine1_name' => $this->input->post('machine1_name'),
            'machine2_name' => $this->input->post('machine2_name'),
            'machine3_name' => $this->input->post('machine3_name'),
            'machine4_name' => $this->input->post('machine4_name'),
            'machine5_name' => $this->input->post('machine5_name'),
            'machine6_name' => $this->input->post('machine6_name'),

            'tech1_name' => $this->input->post('tech1_name'),
            'tech2_name' => $this->input->post('tech2_name'),
            'tech3_name' => $this->input->post('tech3_name'),
            'tech4_name' => $this->input->post('tech4_name'),
            'tech5_name' => $this->input->post('tech5_name'),
            'tech6_name' => $this->input->post('tech6_name'),
            
            // Img
            'img_besar' => $dataInfo[0]['file_name'],
            'product1' => $dataInfo[1]['file_name'],
            'product2' => $dataInfo[2]['file_name'],
            'product3' => $dataInfo[3]['file_name'],
            'product4' => $dataInfo[4]['file_name'],
            'product5' => $dataInfo[5]['file_name'],
            'product6' => $dataInfo[6]['file_name'],
            'machine1' => $dataInfo[7]['file_name'],
            'machine2' => $dataInfo[8]['file_name'],
            'machine3' => $dataInfo[9]['file_name'],
            'machine4' => $dataInfo[10]['file_name'],
            'machine5' => $dataInfo[11]['file_name'],
            'machine6' => $dataInfo[12]['file_name'],
            'tech1' => $dataInfo[13]['file_name'],
            'tech2' => $dataInfo[14]['file_name'],
            'tech3' => $dataInfo[15]['file_name'],
            'tech4' => $dataInfo[16]['file_name'],
            'tech5' => $dataInfo[17]['file_name'],
            'tech6' => $dataInfo[18]['file_name'],
            'video' => $dataInfo[19]['file_name'],
        );
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan!');
        $this->m_lob->save($data);
        $insert_id = $this->db->insert_id();
        $this->load->library('audit_log');
        $this->audit_log->log('create', 'tb_lob', $insert_id, null, $data);
        redirect('pintumasuk/line_of_business');
    }

    private function set_upload_options() 
    {   
        $config = array();
        $config['upload_path'] = './uploads/line_of_business';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 6000;
        $config['width']      = '842';
        $config['height']      = '559';
        $config['overwrite']     = FALSE;
        return $config;
    }

    public function edit($id) {
        $data['lob'] = $this->m_lob->getById($id);
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/edit_line_of_business',$data);
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
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'product1_name' => $this->input->post('product1_name'),
            'product2_name' => $this->input->post('product2_name'),
            'product3_name' => $this->input->post('product3_name'),
            'product4_name' => $this->input->post('product4_name'),
            'product5_name' => $this->input->post('product5_name'),
            'product6_name' => $this->input->post('product6_name'),

            'machine1_name' => $this->input->post('machine1_name'),
            'machine2_name' => $this->input->post('machine2_name'),
            'machine3_name' => $this->input->post('machine3_name'),
            'machine4_name' => $this->input->post('machine4_name'),
            'machine5_name' => $this->input->post('machine5_name'),
            'machine6_name' => $this->input->post('machine6_name'),

            'tech1_name' => $this->input->post('tech1_name'),
            'tech2_name' => $this->input->post('tech2_name'),
            'tech3_name' => $this->input->post('tech3_name'),
            'tech4_name' => $this->input->post('tech4_name'),
            'tech5_name' => $this->input->post('tech5_name'),
            'tech6_name' => $this->input->post('tech6_name'),
            
            // Img
            'img_besar' => ($dataInfo[0]['file_name'] == '' ? $this->input->post('img_besar') : $dataInfo[0]['file_name']),
            'product1' => ($dataInfo[1]['file_name'] == '' ? $this->input->post('product1') : $dataInfo[1]['file_name']),
            'product2' => ($dataInfo[2]['file_name'] == '' ? $this->input->post('product2') : $dataInfo[2]['file_name']),
            'product3' => ($dataInfo[3]['file_name'] == '' ? $this->input->post('product3') : $dataInfo[3]['file_name']),
            'product4' => ($dataInfo[4]['file_name'] == '' ? $this->input->post('product4') : $dataInfo[4]['file_name']),
            'product5' => ($dataInfo[5]['file_name'] == '' ? $this->input->post('product5') : $dataInfo[5]['file_name']),
            'product6' => ($dataInfo[6]['file_name'] == '' ? $this->input->post('product6') : $dataInfo[6]['file_name']),

            'machine1' => ($dataInfo[7]['file_name'] == '' ? $this->input->post('machine1') : $dataInfo[7]['file_name']),
            'machine2' => ($dataInfo[8]['file_name'] == '' ? $this->input->post('machine2') : $dataInfo[8]['file_name']),
            'machine3' => ($dataInfo[9]['file_name'] == '' ? $this->input->post('machine3') : $dataInfo[9]['file_name']),
            'machine4' => ($dataInfo[10]['file_name'] == '' ? $this->input->post('machine4') : $dataInfo[10]['file_name']),
            'machine5' => ($dataInfo[11]['file_name'] == '' ? $this->input->post('machine5') : $dataInfo[11]['file_name']),
            'machine6' => ($dataInfo[12]['file_name'] == '' ? $this->input->post('machine6') : $dataInfo[12]['file_name']),

            'tech1' => ($dataInfo[13]['file_name'] == '' ? $this->input->post('tech1') : $dataInfo[13]['file_name']),
            'tech2' => ($dataInfo[14]['file_name'] == '' ? $this->input->post('tech2') : $dataInfo[14]['file_name']),
            'tech3' => ($dataInfo[15]['file_name'] == '' ? $this->input->post('tech3') : $dataInfo[15]['file_name']),
            'tech4' => ($dataInfo[16]['file_name'] == '' ? $this->input->post('tech4') : $dataInfo[16]['file_name']),
            'tech5' => ($dataInfo[17]['file_name'] == '' ? $this->input->post('tech5') : $dataInfo[17]['file_name']),
            'tech6' => ($dataInfo[18]['file_name'] == '' ? $this->input->post('tech6') : $dataInfo[18]['file_name']),
            'video' => ($dataInfo[19]['file_name'] == '' ? $this->input->post('video') : $dataInfo[19]['file_name']),
        );   

        $before = (array) $this->m_lob->getById($id);
        $this->m_lob->update($data,$id);
        $this->load->library('audit_log');
        $this->audit_log->log('update', 'tb_lob', $id, $before, $data);
        $this->session->set_flashdata('success', 'Data Berhasil Di Update!');
        redirect('pintumasuk/line_of_business');  
    }

    function delete($id) {
        // $filename = $image_path . $lob; 
        // if (file_exists($filename))
        // {
        //     unlink($filename);
        // }
        $before = (array) $this->m_lob->getById($id);
        $this->m_lob->delete($id);
        $this->load->library('audit_log');
        $this->audit_log->log('delete', 'tb_lob', $id, $before, null);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('pintumasuk/line_of_business');
    }
}