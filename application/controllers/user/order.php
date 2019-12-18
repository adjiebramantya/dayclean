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

	public function order2(){
		$invoice = $this->session->userdata('invoice');
		$data = array(
			'detail_sepatu' => $this->m_order->tampil_sepatu($invoice),
			'treatment'=>$this->m_treatment->list_treatment(),
			'sum_total' =>$this->m_order->get_sum($invoice),
			'sum_total_sepatu' =>$this->m_order->get_sum1($invoice)

		);

		$this->load->view('user/order2',$data);
	}

	public function data_user()
	{
		$invoice	= $this->m_order->kode();
		$tanggal	= date('Y-m-d');
		$nama		= $this->input->post('nama_user');
		$alamat		= $this->input->post('alamat_user');
		$telepon	= $this->input->post('no_hp');
		$status		= $this->input->post('status');

		$this->session->set_userdata('invoice', $invoice);

		$data = array('invoice' => $invoice,
					  'tanggal' => $tanggal,
					  'nama_user' => $nama,
					  'alamat_user' => $alamat,
					  'no_hp' => $telepon,
					  'status' => $status );

		$this -> m_order -> input_order($data,'order');

		redirect('user/order/order2');
	}
	public function tambah_treatment()
	{
		$invoice		= $this->session->userdata('invoice');
		$treatment		= $this->input->post('treatment');
		$id_treatment	= $this->m_order->id_treatment($treatment)->id_treatment;
		$jumlah_sepatu	= $this->input->post('jumlah_sepatu');
		$harga			= $this->m_order->harga_treatment($treatment)->harga;
		$total			= $jumlah_sepatu*$harga;

		$data = array('invoice' => $invoice,
					  'id_treatment' => $id_treatment,
					  'nama_treatment' => $treatment,
					  'jumlah_sepatu' => $jumlah_sepatu,
					  'total' => $total,
					  );		

		$this ->m_order->input_order($data,'detail_order');
		redirect('user/order/order2');

	}

	public function hapus_treatment($id_treatment)
			{
				$where = array('id_treatment' => $id_treatment);
				$this->m_order->hapus_order($where,'detail_order');
				redirect('user/order/order2');
			}

	public function simpan_total($invoice)
			{
				$where = array('invoice'=>$invoice);
				$data = array('total'=> $this->input->post('total_harga'),
							  'jumlah_sepatu'=> $this->input->post('total_sepatu'));
				
				$this->m_order->update_order($where,$data,'order');
				redirect('https://api.whatsapp.com/send?phone=62823-4060-1537&text=Halo%20admin%20Kepstore%20saya%20mau%20nanya%20kaos '.$invoice);

			}
}
