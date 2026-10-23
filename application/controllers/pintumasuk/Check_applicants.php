<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check_applicants extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array("m_check_applicants","m_user","m_career"));
        $this->load->library('form_validation','pdf');
        $this->m_user->cek_login();
    }
 
    public function index() {
        if($this->input->post('show'))
          {
          $keyword = $this->input->post('keyword');
          $data = [
                  'pelamar'       => $this->m_check_applicants->getAll_byfilter($keyword),
                  'keyword'       => $keyword,
                ];
           
          }
          else
          {
            $keyword = $this->input->post('keyword');
            $data = [
                    'pelamar'          => $this->m_check_applicants->getAll(),
                    'keyword'          => $keyword
                  ];

          }
            $this->load->view('_layouts_admin/head');
            $this->load->view('_layouts_admin/navbar');
            $this->load->view('_layouts_admin/sidebar');
            $this->load->view('admin/applicants_check',$data);
            $this->load->view('_layouts_admin/footer');
    }   
}