<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Vision_mission extends CI_Controller {
 
 public function __construct(){
	 parent::__construct();
	 $this->load->helper('url');
	 $this->load->model('m_vision_mission','mvm');
	 }

 public function index(){ 
 	$data = ['vision_mission' => $this->mvm->index()];
	 $this->load->view('_layouts/v_navbar');
	 $this->load->view('vision_mission', $data);
	 $this->load->view('_layouts/v_footer');
	 }
}