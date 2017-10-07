<?php

class Model_kamar extends CI_Model
{

  function tampilkan_data()
  {
    $query = "SELECT
              tb_kamar.id_kamar,
              tb_kamar.no_kamar,
              tb_lantai.nama_lantai,
              tb_kelas.nama_kelas,
              tb_tipe_kamar.tipe_kamar,
              -- tb_fasilitas.fasilitas,
              -- tb_fasilitas.keterangan,
              tb_kamar.harga,
              tb_kamar.kondisi
              FROM tb_kamar
              INNER JOIN tb_lantai ON tb_kamar.id_lantai = tb_lantai.id_lantai
              INNER JOIN tb_kelas ON tb_kamar.id_kelas = tb_kelas.id_kelas
              INNER JOIN tb_tipe_kamar ON tb_kamar.id_tipe_kamar = tb_tipe_kamar.id_tipe_kamar
              -- INNER JOIN tb_fasilitas ON tb_kamar.id_fasilitas = tb_fasilitas.id_fasilitas
              ORDER BY tb_kamar.no_kamar ASC";

    return $this->db->query($query);
  }

  function post()
  {
    $data = array('no_kamar'       => $this->input->post('no_kamar'),
                  'id_lantai'      => $this->input->post('id_lantai'),
                  'id_kelas'       => $this->input->post('id_kelas'),
                  'id_tipe_kamar'  => $this->input->post('id_tipe_kamar'),
                  // 'id_fasilitas'   => $this->input->post('id_fasilitas'),
                  'harga'          => $this->input->post('harga'),
                  'kondisi'        => $this->input->post('kondisi'));
    $this->db->insert('tb_kamar',$data);
  }

  function get_kamar($id)
  {
    $param = array('id_kamar' => $id);

    return $this->db->get_where('tb_kamar',$param);
  }

  function edit()
  {
    $data = array('no_kamar'       => $this->input->post('no_kamar'),
                  'id_lantai'      => $this->input->post('id_lantai'),
                  'id_kelas'       => $this->input->post('id_kelas'),
                  'id_tipe_kamar'  => $this->input->post('id_tipe_kamar'),
                  // 'id_fasilitas'   => $this->input->post('id_fasilitas'),
                  'harga'          => $this->input->post('harga'));
    $this->db->where('id_kamar', $this->input->post('id'));
    $this->db->update('tb_kamar',$data);
  }

  function hapus($id)
  {
    $this->db->where('id_kamar', $id);
    $this->db->delete('tb_kamar');
  }
}
