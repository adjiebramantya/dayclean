<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
		{
			parent::__construct();

			if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/clogin"));

		}

		}
	public function index()
	{
		$this->load->view('admin/index');
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
