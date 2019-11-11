<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class treatment extends CI_Controller {

	function __construct()
		{
			parent::__construct();

			$this->load->model("m_treatment");

		}
	public function index()
	{
		$data['datatreatment']=$this->m_treatment->list_treatment();
		$this->load->view('admin/menu',$data);
	}

	public function tambahMenu()
	{
		$this->load->view('admin/tambahMenu');
	}
}
