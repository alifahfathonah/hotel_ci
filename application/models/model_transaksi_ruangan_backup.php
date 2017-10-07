<?php
/**
* 
*/
class Model_transaksi_ruangan extends CI_Model
{
	
	function tampilkan_data()
	{
		$id = $this->uri->segment(3);
		$query = "SELECT 
		tb_transaksi_ruangan.*,
		tb_ruangan.nama_ruangan
		FROM tb_transaksi_ruangan
		INNER JOIN tb_ruangan on tb_transaksi_ruangan.id_ruangan = tb_ruangan.id_ruangan
		WHERE tb_transaksi_ruangan.status = 0
		AND tb_transaksi_ruangan.id_ruangan = '$id'
		ORDER BY tanggal_sewa DESC";

		return $this->db->query($query);
	}

	function get_ruangan($id)
	{
		$param = array('id_ruangan' => $id);
		return $this->db->get_where('tb_ruangan',$param);
	}

	function post()
	{
		$hari = $this->input->post('lama_sewa');
		$waktu = $this->input->post('lama_waktu');
		
		$tanggal_sewa = $this->input->post('tanggal_sewa');

		$tanggal_selesai = time();

		if (!empty($this->input->post('lama_sewa'))) {
			$lama_sewa = $hari * 24;

			$total_bayar = $this->input->post('harga') * $lama_sewa;
			$data = array(
				'nama_pelanggan'       => $this->input->post('nama_pelanggan'),
				'alamat'               => $this->input->post('alamat'),
				'kontak'               => $this->input->post('kontak'),
				'id_ruangan'           => $this->input->post('id_ruangan'),
				'lama_sewa'	           => $hari,
				'tanggal_sewa'	       => $tanggal_sewa,

				// 'tanggal_selesai'	   => "DATE_ADD($tanggal_sewa + INTERVAL 2 DAY)",
				'tanggal_selesai'      => date('Y-m-d H:i:s', strtotime($tanggal_sewa.' +'. $hari .' days')),
				'tipe_pembayaran'      => $this->input->post('tipe_pembayaran'),
				'total_bayar'          => $total_bayar);
		} else {
			
			$total_bayar = $this->input->post('harga') * $this->input->post('lama_waktu');
			$data = array(
				'nama_pelanggan'       => $this->input->post('nama_pelanggan'),
				'alamat'               => $this->input->post('alamat'),
				'kontak'               => $this->input->post('kontak'),
				'id_ruangan'           => $this->input->post('id_ruangan'),
				'lama_waktu'	       => $waktu,
				'tanggal_sewa'	       => $tanggal_sewa,
				'tanggal_selesai'      => date('Y-m-d H:i:s', strtotime($tanggal_sewa.' +'. $waktu .' hours')),
				'tipe_pembayaran'      => $this->input->post('tipe_pembayaran'),
				'total_bayar'          => $total_bayar);
		}
		$this->db->insert('tb_transaksi_ruangan',$data);
	}

	function selesai($id)
	{
		$update_transaksi = array('status' => 1);
		$this->db->where('id_transaksi_ruangan', $id);
		$this->db->update('tb_transaksi_ruangan',$update_transaksi);
	}

	function laporan_default_ruangan()
	{
		$query = "SELECT 
		tb_transaksi_ruangan.*,
		tb_ruangan.nama_ruangan
		FROM tb_transaksi_ruangan
		INNER JOIN tb_ruangan on tb_transaksi_ruangan.id_ruangan = tb_ruangan.id_ruangan
		WHERE tb_transaksi_ruangan.status = 1
		ORDER BY tanggal_sewa DESC";

		return $this->db->query($query);

	}

	function laporan_periode_ruangan($tanggal1,$tanggal2)
	{
		$query = "SELECT 
		tb_transaksi_ruangan.*,
		tb_ruangan.nama_ruangan
		FROM tb_transaksi_ruangan
		INNER JOIN tb_ruangan on tb_transaksi_ruangan.id_ruangan = tb_ruangan.id_ruangan
		WHERE tb_transaksi_ruangan.status = 1
		AND tb_transaksi_ruangan.tanggal_sewa BETWEEN '$tanggal1'
        AND '$tanggal2'
		ORDER BY tanggal_sewa DESC";

		return $this->db->query($query);
	}
}