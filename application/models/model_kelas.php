<?php

class Model_kelas extends CI_Model
{

  function tampilkan_data()
  {
    return $this->db->get('tb_kelas');
  }

  function post()
  {
    $data = array('nama_kelas' => $this->input->post('nama_kelas'));
    $this->db->insert('tb_kelas',$data);
  }

  function get_kelas($id)
  {
    $param = array('id_kelas'=>$id);
    return $this->db->get_where('tb_kelas',$param);
  }

  function edit()
  {
    $data = array('nama_kelas' => $this->input->post('nama_kelas'));
    $this->db->where('id_kelas', $this->input->post('id'));
    $this->db->update('tb_kelas',$data);
  }

  function hapus($id)
  {
    $this->db->where('id_kelas', $id);
    $this->db->delete('tb_kelas');
  }
}
