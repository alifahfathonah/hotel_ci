<?php

/**
 *
 */
class Model_user extends CI_Model
{

  function login($username,$password,$level)
  {
    $check = $this->db->get_where('tb_user',array('username'=>$username,'password'=>md5($password), 'level'=>$level));
    if ($check->num_rows()>0) {
      return 1;
    } else {
      return 0;
    }
  }
  function tampilkan_data()
  {
    return $this->db->get('tb_user');
  }

  function get_user($id)
  {
    $param = array('id_user'=>$id);
    return $this->db->get_where('tb_user',$param);
  }
}
