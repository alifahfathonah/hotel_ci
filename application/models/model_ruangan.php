<?php

class Model_ruangan extends CI_Model
{

  function tampilkan_data()
  {
    $query = "SELECT
              tb_ruangan.id_ruangan,
              tb_ruangan.nama_ruangan,
              tb_jenis_ruangan.id_jenis_ruangan,
              tb_jenis_ruangan.jenis_ruangan,
              tb_ruangan.kapasitas,
              tb_lantai.id_lantai,
              tb_lantai.nama_lantai,
              tb_ruangan.harga
              FROM tb_ruangan
              INNER JOIN tb_lantai ON tb_ruangan.id_lantai = tb_lantai.id_lantai
              INNER JOIN tb_jenis_ruangan ON tb_ruangan.id_jenis_ruangan = tb_jenis_ruangan.id_jenis_ruangan
              ORDER BY tb_ruangan.id_ruangan ASC";
    return $this->db->query($query);
  }

  function post()
  {
    $data = array('nama_ruangan'       => $this->input->post('nama_ruangan'),
                  'id_jenis_ruangan'   => $this->input->post('id_jenis_ruangan'),
                  'kapasitas'          => $this->input->post('kapasitas'),
                  'id_lantai'          => $this->input->post('id_lantai'),
                  'harga'              => $this->input->post('harga'));
    $this->db->insert('tb_ruangan',$data);
  }

  function get_ruangan($id)
  {
    $param = array('id_ruangan' => $id);

    return $this->db->get_where('tb_ruangan',$param);
  }

  function edit()
  {
    $data = array('nama_ruangan'       => $this->input->post('nama_ruangan'),
                  'id_jenis_ruangan'   => $this->input->post('id_jenis_ruangan'),
                  'kapasitas'          => $this->input->post('kapasitas'),
                  'id_lantai'          => $this->input->post('id_lantai'),
                  'harga'              => $this->input->post('harga'));
    $this->db->where('id_ruangan', $this->input->post('id'));
    $this->db->update('tb_ruangan',$data);
  }

  function hapus($id)
  {
    $this->db->where('id_ruangan', $id);
    $this->db->delete('tb_ruangan');
  }
}
