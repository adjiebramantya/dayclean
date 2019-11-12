<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {

	function __construct()
		{
			parent::__construct();

			$this->load->model("m_pegawai");

		}
	public function index()
	{
		$data['datapegawai']=$this->m_pegawai->list_pegawai();
		$this->load->view('admin/listPegawai',$data);
	}

	public function tambahPegawai()
	{	
		$this->load->view('admin/tambahPegawai');
	} 
}
