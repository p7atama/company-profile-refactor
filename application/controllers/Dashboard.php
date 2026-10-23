<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 error_reporting(0);
 
class Dashboard extends CI_Controller {
 
	 function __construct(){
	 parent::__construct();
	 $this->load->helper('url');
	 $this->load->model('m_home','mh');
	 }

 public function index(){ 
 	$data = ['home' => $this->mh->index()];
	 $this->load->view('_layouts/v_navbar');
	 $this->load->view('dashboard', $data);
	 $this->load->view('_layouts/v_footer');
	 }
}