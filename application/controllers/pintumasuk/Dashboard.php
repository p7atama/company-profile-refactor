<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model(array("m_recruitment","m_user"));
        $this->load->library('form_validation');
        $this->m_user->cek_login();
    }

    public function index()
    {
        // $data['recruitment'] = $this->m_recruitment->getAll();
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('_layouts_admin/footer');
    }

}