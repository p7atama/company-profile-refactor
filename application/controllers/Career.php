<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Career extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_career', 'm');
	}

	public function index()
	{
		$data = [
			'career' 		=> $this->m->index(),
			'disclaimer'	=> $this->m->getDisclaimer(),
			'faq'		    => $this->m->getFAQ()
		];
		$this->load->view('_layouts/v_navbar');
		$this->load->view('career', $data);
		$this->load->view('_layouts/v_footer');
	}
}
