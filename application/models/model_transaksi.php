<?php

class Model_transaksi extends CI_Model
{

  function tampilkan_data()
  {
    $query = "SELECT
              tb_transaksi.*,
              tb_kamar.no_kamar
              -- tb_fasilitas.fasilitas,
              -- tb_fasilitas.keterangan
              -- tb_user.username
              FROM tb_transaksi
              INNER JOIN tb_kamar ON tb_transaksi.id_kamar = tb_kamar.id_kamar
              -- INNER JOIN tb_fasilitas ON tb_transaksi.id_fasilitas = tb_fasilitas.id_fasilitas
              -- INNER JOIN tb_user ON tb_transaksi.id_user = tb_user.id_user
              WHERE tb_transaksi.status = 0
              ORDER BY check_in DESC";

    return $this->db->query($query);
  }

  

  function post()
  {
    $data = array('nama_pelanggan'       => $this->input->post('nama_pelanggan'),
                  'alamat'               => $this->input->post('alamat'),
                  'kontak'               => $this->input->post('kontak'),
                  'id_kamar'             => $this->input->post('id_kamar'),
                  'lama_tinggal'         => $this->input->post('lama_tinggal'),
                  'id_fasilitas'         => $this->input->post('id_fasilitas'),
                  'tipe_pembayaran'      => $this->input->post('tipe_pembayaran'));
    $this->db->insert('tb_transaksi',$data);
  }

  function get_kamar($id)
  {
    $param = array('id_kamar' => $id);

    return $this->db->get_where('tb_kamar',$param);
  }

  function pilih_kamar()
  {
    $check_out = time();

    $total_bayar = ($this->input->post('harga') * $this->input->post('lama_tinggal'));

    $data = array('nama_pelanggan'       => $this->input->post('nama_pelanggan'),
                  'alamat'               => $this->input->post('alamat'),
                  'kontak'               => $this->input->post('kontak'),
                  'id_kamar'             => $this->input->post('id_kamar'),
                  'lama_tinggal'         => $this->input->post('lama_tinggal'),
                  'check_in'             => $this->input->post('check_in'),
                  'check_out'            => date('Y-m-d H:i:s', strtotime('+ '.$this->input->post('lama_tinggal').' day', $check_out)),
                  'tipe_pembayaran'      => $this->input->post('tipe_pembayaran'),
                  'total_bayar'          => $total_bayar);

    $update_kamar = array('kondisi' => $this->input->post('kondisi'));
    $this->db->where('id_kamar', $this->input->post('id'));
    $this->db->update('tb_kamar',$update_kamar);

    $this->db->insert('tb_transaksi',$data);
  }

  function check_out($id)
  {
    $update_kamar = array('kondisi' => 'Kosong');
    $this->db->where('id_kamar', $id);
    $this->db->update('tb_kamar',$update_kamar);

    $update_transaksi = array('status' => 1);
    $this->db->where('id_kamar', $id);
    $this->db->update('tb_transaksi',$update_transaksi);
  }

  function laporan_default_kamar()
  {
    $query = "SELECT
              tb_transaksi.*,
              tb_kamar.no_kamar
              FROM tb_transaksi
              INNER JOIN tb_kamar ON tb_transaksi.id_kamar = tb_kamar.id_kamar
              WHERE tb_transaksi.status = 1
              GROUP BY tb_transaksi.id_transaksi";

    return $this->db->query($query);
  }

  function laporan_periode_kamar($tanggal1,$tanggal2)
  {
    $query = "SELECT
              tb_transaksi.*,
              tb_kamar.no_kamar
              FROM tb_transaksi
              INNER JOIN tb_kamar ON tb_transaksi.id_kamar = tb_kamar.id_kamar
              WHERE tb_transaksi.status = 1
              AND tb_transaksi.check_in BETWEEN '$tanggal1'
              AND '$tanggal2'
              GROUP BY tb_transaksi.id_transaksi";

    return $this->db->query($query);
  }

}
