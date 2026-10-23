<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Recruitment_form_op extends CI_Controller {
 
	 function __construct(){
	 parent::__construct();
	 $this->load->helper('url');
	 }

 public function index(){ 
	 $this->load->view('_layouts/v_navbar');
	 $this->load->view('recruitment_form_op');
	 $this->load->view('_layouts/v_footer');
	 }
}