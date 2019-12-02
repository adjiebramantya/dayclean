<?php 
	/**
	 * 
	 */
	class m_order extends CI_Model
	{
		//data_treatment:
		function list_pegawai()
		{
			$hasil=$this->db->query("SELECT id_pegawai,nm_pegawai,alamat_pegawai,no_hp,level FROM pegawai");

            return $hasil;
		}

		function edit_pegawai($where,$table)
		{
			return $this->db->get_where($table,$where);
		}

		function update_pegawai($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function input_pegawai($data,$table)
		{
			$this->db->insert($table,$data);
		}

		function hapus_pegawai($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}

		function kode(){
			$this->db->SELECT('right(order.id_order,2) as id',false);
			$this->db->order_by('id','DESC');
			$this->db->limit(1);
			$query=$this->db->get('order');

			if ($query->num_rows() <> 0) {
				//cek kode jika telah tersedia

				$data=$query->row();
				$kode=intval($data->id)+1;
			}
			else {
				$kode=1; // cek jika kode belum terdapat pada table
			}

			$tgl=date('dmY');
			$batas=str_pad($kode,4,"0",STR_PAD_LEFT);
			$kodetampil="TR".$tgl.$batas; //format kode
			return $kodetampil;	
		}
	}
?>