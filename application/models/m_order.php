<?php 
	/**
	 * 
	 */
	class m_order extends CI_Model
	{
		//data_treatment:
		function list_order()
		{
			$hasil=$this->db->query("SELECT id_order,nm_order,alamat_order,no_hp,level FROM order");

            return $hasil;
		}

		function edit_order($where,$table)
		{
			return $this->db->get_where($table,$where);
		}

		function tampil_sepatu($invoice)

		{
			return $this ->db -> query("SELECT * FROM detail_order where invoice='$invoice'");
		}

		function harga_treatment($treatment)

		{
			$hasil = $this->db->query("SELECT harga FROM treatment where nama_treatment='$treatment'");

			return $hasil->row();
		}

		function id_treatment($treatment)

		{
			$hasil = $this->db->query("SELECT id_treatment FROM treatment where nama_treatment='$treatment'");

			return $hasil->row();
		}

		function jumlah_semua_sepatu()

		{
			$hasil = $this->db->query("SELECT sum(jumlah_sepatu) as jumlah FROM detail_order");

			return $hasil->row();
		}

		function update_order($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function input_order($data,$table)
		{
			$this->db->insert($table,$data);
		}

		function hapus_order($where,$table){
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
		function get_sum($invoice)
		{
			$this->db->select_sum('total','total_semua');
			$this->db->from('detail_order');
			$this->db->where('invoice' , $invoice);
			return $this->db->get('')->row();
		}
		function get_sum1($invoice)
		{
			$this->db->select_sum('jumlah_sepatu','total_sepatu');
			$this->db->from('detail_order');
			$this->db->where('invoice' , $invoice);
			return $this->db->get('')->row();
		}
	}
?>