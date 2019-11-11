<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
		{
			parent::__construct();

			$this->load->model("m_treatment");

		}
	public function index()
	{
		$this->load->view('admin/index');
	}

	public function pegawai()
	{
		$this->load->view('admin/pegawai');
	}

	public function menu()
		{
			$data['datatreatment']=$this->m_treatment->list_treatment();
			$this->load->view('admin/menu',$data);
			
		}

	public function tambahMenu()
	{
		$this->load->view('admin/tambahMenu');
	}

	public function listPegawai()
	{
		$this->load->view('admin/listPegawai');
	}

	public function tambahPegawai()
	{
		$this->load->view('admin/tambahPegawai');
	}

	public function laporanHarian()
	{
		$this->load->view('admin/laporanHarian');
	}

	function transaksi()
	{
		$this->load->view('admin/transaksi');
	}
}
