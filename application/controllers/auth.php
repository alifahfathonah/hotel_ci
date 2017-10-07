<?php

class Auth extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('model_user');
  }
  function login()
  {
    if (isset($_POST['submit'])) {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $level    = $this->input->post('level');
      $hasil = $this->model_user->login($username,$password,$level);
      if ($hasil==1) {
        $this->db->where('username',$username);
        $this->db->update('tb_user',array('last_login'=>date('Y-m-d')));
        $this->session->set_userdata(array('status_login'=>'oke', 'username' => $username, 'level' => $level));
        redirect('dashboard');
      } else {
        redirect('auth/login');
      }
    } else {
      check_session_login();
      $this->load->view('form_login');
    }
  }
  function logout()
  {
    $this->session->sess_destroy();
    redirect('auth/login');
  }
}
