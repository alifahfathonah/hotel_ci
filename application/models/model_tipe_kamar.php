<?php

class Model_tipe_kamar extends CI_Model
{

  function tampilkan_data()
  {
    return $this->db->get('tb_tipe_kamar');
  }

  function post()
  {
    $data = array('tipe_kamar' => $this->input->post('tipe_kamar'),
                  'keterangan' => $this->input->post('keterangan'));
    $this->db->insert('tb_tipe_kamar',$data);
  }

  function get_tipe_kamar($id)
  {
    $param = array('id_tipe_kamar'=>$id);
    return $this->db->get_where('tb_tipe_kamar',$param);
  }

  function edit()
  {
    $data = array('tipe_kamar' => $this->input->post('tipe_kamar'),
                  'keterangan' => $this->input->post('keterangan'));
    $this->db->where('id_tipe_kamar', $this->input->post('id'));
    $this->db->update('tb_tipe_kamar',$data);
  }

  function hapus($id)
  {
    $this->db->where('id_tipe_kamar', $id);
    $this->db->delete('tb_tipe_kamar');
  }
}
