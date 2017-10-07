<?php

class Kelas_kamar extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_kelas');
    check_session();
  }
  function index()
  {
    $data['title'] = 'Manajemen Kelas Kamar';
    $data['record'] = $this->model_kelas->tampilkan_data();
    $this->template->load('template','kelas_kamar/lihat_data',$data);
  }

  function post()
  {
    if (isset($_POST['submit'])) {
      $this->model_kelas->post();
      redirect('kelas_kamar');
    } else {
      $data['title'] = 'Tambah Kelas Kamar';
      $this->template->load('template','kelas_kamar/form_input',$data);
    }
  }

  function edit()
  {
    if (isset($_POST['submit'])) {
      $this->model_kelas->edit();
      redirect('kelas_kamar');
    } else {
      $data['title'] = 'Edit Kelas Kamar';
      $id = $this->uri->segment(3);
      $data['record'] = $this->model_kelas->get_kelas($id)->row_array();
      $this->template->load('template','kelas_kamar/form_edit',$data);
    }
  }
  function hapus()
  {
    $id = $this->uri->segment(3);
    $this->model_kelas->hapus($id);
    redirect ('kelas_kamar');
  }

}
