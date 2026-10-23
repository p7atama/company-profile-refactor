<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Conflict_mineral_policy extends CI_Controller {
 
	 function __construct(){
	 parent::__construct();
	 $this->load->helper('url');
	 }

 public function index(){ 
	 $this->load->view('_layouts/v_navbar');
	 $this->load->view('conflict_mineral_policy');
	 $this->load->view('_layouts/v_footer');
	 }
}