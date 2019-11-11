<?php 
	/**
	 * 
	 */
	class m_treatment extends CI_Model
	{
		//data_treatment:
		function list_treatment()
		{
			$hasil=$this->db->query("SELECT id_treatment,nama_treatment,deskripsi,harga FROM treatment");

            return $hasil;
		}
	}
?>