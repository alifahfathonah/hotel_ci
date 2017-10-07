<?php 
/**
* 
*/
class Model_jenis_ruangan extends CI_Model
{
	
	function tampilkan_data()
	{
		return $this->db->get('tb_jenis_ruangan');
	}

	function post()
	{
		$data = array('jenis_ruangan' => $this->input->post('jenis_ruangan'));
		$this->db->insert('tb_jenis_ruangan',$data);
	}

	function get_jenis_ruangan($id)
	{
		$param = array('id_jenis_ruangan'=>$id);
		return $this->db->get_where('tb_jenis_ruangan',$param);
	}

	function edit()
	{
		$data = array('jenis_ruangan' => $this->input->post('jenis_ruangan'));
		$this->db->where('id_jenis_ruangan', $this->input->post('id'));
		$this->db->update('tb_jenis_ruangan',$data);
	}

	function hapus($id)
	{
		$this->db->where('id_jenis_ruangan', $id);
		$this->db->delete('tb_jenis_ruangan');
	}

}