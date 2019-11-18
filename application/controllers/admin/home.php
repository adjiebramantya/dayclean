<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
		{
			parent::__construct();

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
