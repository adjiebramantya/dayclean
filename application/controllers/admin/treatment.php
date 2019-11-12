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
		$this->load->view('admin/treatment',$data);
	}

	public function tambahTreatment()
	{	
		$this->load->view('admin/tambahTreatment');
	}

	public function aksi_tambahTreatment()
	{	
		/**$this->m_treatment->rulesNew();

		if($this->form_validation->run() == false){
			$this->load->view('admin/tambahTreatment');
		} else{**/

		$namatreatment = $this->input->post('namatreatment');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');

			$data = array(
				'nama_treatment' => $namatreatment,
				'deskripsi' => $deskripsi,
				'harga' => $harga
			);
			$this->m_treatment->input_treatment($data,'treatment');
			redirect('admin/treatment');
		//}
	} 

	function edit($id_treatment)
		{
			$where = array('id_treatment'=>$id_treatment);
			$data['ganti'] = $this->m_admin->edit_treatment($where,'treatment')->result();
			$this->load->view('admin/tambahTreatment',$data);
		}

	function aksi_editTreatment()
	{

	}

	function hapus($id_treatment)
		{
			$where = array('id_treatment' => $id_treatment);
			$this->m_admin->hapus_treatment($where,'treatment');
			redirect('treatment');
		}
}
