<?php

class Model_fasilitas extends CI_Model
{

  function tampilkan_data()
  {
    return $this->db->get('tb_fasilitas');
  }

  function post()
  {
    $data = array('fasilitas' => $this->input->post('fasilitas'),
                  'keterangan' => $this->input->post('keterangan'),
                  'harga_fasilitas' => $this->input->post('harga_fasilitas'));
    $this->db->insert('tb_fasilitas',$data);
  }

  function get_fasilitas($id)
  {
    $param = array('id_fasilitas'=>$id);
    return $this->db->get_where('tb_fasilitas',$param);
  }

  function edit()
  {
    $data = array('fasilitas' => $this->input->post('fasilitas'),
                  'keterangan' => $this->input->post('keterangan'),
                  'harga_fasilitas' => $this->input->post('harga_fasilitas'));
    $this->db->where('id_fasilitas', $this->input->post('id'));
    $this->db->update('tb_fasilitas',$data);
  }

  function hapus($id)
  {
    $this->db->where('id_fasilitas', $id);
    $this->db->delete('tb_fasilitas');
  }
}
