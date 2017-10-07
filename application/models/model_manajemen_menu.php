<?php 
/**
* 
*/
class Model_manajemen_menu extends CI_Model
{
	
	function tampilkan_data()
	{
		return $this->db->get('tb_menu');
	}

	function post()
	{
		$data = array('nama_menu' => $this->input->post('nama_menu'),
					  'link'	  => $this->input->post('link'),
					  'icon'	  => $this->input->post('icon'),
					  'level'	  => $this->input->post('level')
					  );
		$this->db->insert('tb_menu',$data);
	}

	function get_menu($id)
	{
		$param = array('id_menu'=>$id);
		return $this->db->get_where('tb_menu',$param);
	}

	function edit()
	{
		$data = array('nama_menu' => $this->input->post('nama_menu'),
					  'link'	  => $this->input->post('link'),
					  'icon'	  => $this->input->post('icon'),
					  'level'	  => $this->input->post('level')
					  );
		$this->db->where('id_menu', $this->input->post('id'));
		$this->db->update('tb_menu',$data);
	}

	function hapus($id)
	{
		$this->db->where('id_menu', $id);
		$this->db->delete('tb_menu');
	}
}