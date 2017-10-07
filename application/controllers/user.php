<?php

class User extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_user');
    check_session();
  }
  function index()
  {
    $data['title'] = 'Manajemen User';
    $data['record'] = $this->model_user->tampilkan_data();
    $this->template->load('template','user/lihat_data',$data);
  }

  function post()
  {
    if (isset($_POST['submit'])) {
      $nama     = $this->input->post('nama_lengkap',true);
      $username = $this->input->post('username',true);
      $password = $this->input->post('password',true);
      $level    = $this->input->post('level',true);
      $data = array('nama_lengkap' => $nama,
                    'username'     => $username,
                    'password'     => md5($password),
                    'level'        => $level
                  );
      $this->db->insert('tb_user',$data);
      redirect('user');
    } else {
        $data['title'] = 'Tambah User';
        $this->template->load('template','user/form_input',$data);
    }
  }

  function edit()
  {
    if (isset($_POST['submit'])) {
      $id       = $this->input->post('id_user',true);
      $nama     = $this->input->post('nama_lengkap',true);
      $username = $this->input->post('username',true);
      $password = $this->input->post('password',true);
      $level    = $this->input->post('level',true);
        if (empty($password)) {
          $data = array('nama_lengkap' => $nama,
                        'username'     => $username,
                        'level'        => $level
                      );
        } else {
          $data = array('nama_lengkap' => $nama,
                        'username'     => $username,
                        'password'     => md5($password),
                        'level'        => $level
                      );
        }

      $this->db->where('id_user',$id);
      $this->db->update('tb_user',$data);
      redirect('user');
    } else {
      $id = $this->uri->segment(3);
      $data['title'] = 'Edit User';
      $data['record'] = $this->model_user->get_user($id)->row_array();
        $this->template->load('template','user/form_edit',$data);
    }
  }
  function hapus()
  {
    $id = $this->uri->segment(3);
    $this->db->where('id_user',$id);
    $this->db->delete('tb_user');
    redirect ('user');
  }

}
