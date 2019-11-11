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

	//TREATMENT

	public function menu()
		{
			$data['datatreatment']=$this->m_treatment->list_treatment();
			$this->load->view('admin/menu',$data);
			
		}

	public function tambahMenu()
	{
		$this->load->view('admin/tambahMenu');
	}

	//PEGAWAI

	public function listPegawai()
	{
		$this->load->view('admin/listPegawai');
	}

	public function tambahPegawai()
	{
		$this->load->view('admin/tambahPegawai');
	}

	//LAPORAN

	public function laporanHarian()
	{
		$this->load->view('admin/laporanHarian');
	}

	//TRANSAKSI

	function transaksi()
	{
		$this->load->view('admin/transaksi');
	}

	function detailTransaksi()
	{
		$this->load->view('admin/detailTransaksi');
	}
}
