<?php

class Model_lantai extends CI_Model
{

  function tampilkan_data()
  {
    return $this->db->get('tb_lantai');
  }

  function post()
  {
    $data = array('nama_lantai' => $this->input->post('nama_lantai'));
    $this->db->insert('tb_lantai',$data);
  }

  function get_lantai($id)
  {
    $param = array('id_lantai'=>$id);
    return $this->db->get_where('tb_lantai',$param);
  }

  function edit()
  {
    $data = array('nama_lantai' => $this->input->post('nama_lantai'));
    $this->db->where('id_lantai', $this->input->post('id'));
    $this->db->update('tb_lantai',$data);
  }

  function hapus($id)
  {
    $this->db->where('id_lantai', $id);
    $this->db->delete('tb_lantai');
  }
}
