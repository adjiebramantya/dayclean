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
		$data['listpegawai']=$this->m_pegawai->list_pegawai();
		$this->load->view('admin/listPegawai',$data);
	}

	public function tambahPegawai()
	{	
		$this->load->view('admin/pegawai');
	}

	function aksi_tambahpegawai()
		{
			$namapegawai = $this->input->post('nm_pegawai');
			$alamat = $this->input->post('alamat_pegawai');
			$nohp = $this->input->post('no_hp');
			$level = $this->input->post('level');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'nm_pegawai' => $namapegawai,
				'alamat_pegawai' => $alamat,
				'no_hp' => $nohp,
				'level' => $level,
				'username' => $username,
				'password' => $password
			);
			$this->m_pegawai->input_pegawai($data,'pegawai');
			redirect('admin/pegawai');
		}
}
