<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Line_of_business extends CI_Controller {
 
	 function __construct(){
	 parent::__construct();
	 $this->load->helper('url');
	 // $this->load->model(array('m_stamping','m_injection'));
	 $this->load->model('m_lob');
	 }

public function index(){ 
 	 $data = [
 	 	'lob' => $this->m_lob->index(),
 	 	'injection' => $this->m_lob->getInjection(),
 	 	'machining' => $this->m_lob->getMachining(),
 	 	'assembly' => $this->m_lob->getAssembly(),
 	 	'tooling' => $this->m_lob->getTooling(),
 	 	'covac' => $this->m_lob->getCovac()
 	 ];
	 $this->load->view('_layouts/v_navbar');
	 $this->load->view('line_of_business', $data);
	 $this->load->view('_layouts/v_footer');
	 }
}