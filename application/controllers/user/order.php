<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct()
		{
			parent::__construct();

			$this->load->model("m_order");
			$this->load->model("m_treatment");
			
		}
	public function index()
	{
		$data = [
			'kode'=>$this->m_order->kode(),
			'tanggal'=>date('d-m-Y'),
			'treatment'=>$this->m_treatment->list_treatment()
		];

		$this->load->view('user/order',$data);
	}

	public function admin()
	{
		$data = [
			'kode'=>$this->m_order->kode(),
			'tanggal'=>date('d-m-Y'),
			'treatment'=>$this->m_treatment->list_treatment()
		];

		$this->load->view('admin/tambahTransaksi',$data);
	}
}
