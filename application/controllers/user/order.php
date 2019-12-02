<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct()
		{
			parent::__construct();

			$this->load->model("m_order");
			
		}
	public function index()
	{
		$data = [
			'kode'=>$this->m_order->kode(),
			'tanggal'=>date('d-m-Y')
		];

		$this->load->view('user/order',$data);
	}
}
