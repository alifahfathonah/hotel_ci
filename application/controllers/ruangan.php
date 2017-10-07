<?php

/**
 *
 */
class Ruangan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_ruangan');
    check_session();
  }
  function index()
  {
    $data['title'] = 'Manajemen ruangan';
    $data['record'] = $this->model_ruangan->tampilkan_data();
    $this->template->load('template','ruangan/lihat_data',$data);
  }

  function post()
  {
    if (isset($_POST['submit'])) {
      $this->model_ruangan->post();
      redirect('ruangan');
    } else {
      $this->load->model('model_lantai');
      $this->load->model('model_jenis_ruangan');

      $data['title'] = 'Tambah ruangan';
      $data['lantai'] = $this->model_lantai->tampilkan_data()->result();
      $data['jenis_ruangan'] = $this->model_jenis_ruangan->tampilkan_data()->result();
      $this->template->load('template','ruangan/form_input',$data);
    }
  }

  function edit()
  {
    if (isset($_POST['submit'])) {
      $this->model_ruangan->edit();
      redirect('ruangan');
    } else {
      $id = $this->uri->segment(3);
      $this->load->model('model_lantai');
      $this->load->model('model_jenis_ruangan');

      $data['title'] = 'Edit ruangan';
      $data['lantai'] = $this->model_lantai->tampilkan_data()->result();
      $data['jenis_ruangan'] = $this->model_jenis_ruangan->tampilkan_data()->result();

      $data['record'] = $this->model_ruangan->get_ruangan($id)->row_array();
      $this->template->load('template','ruangan/form_edit',$data);
    }
  }
  
  function hapus()
  {
    $id = $this->uri->segment(3);
    $this->model_ruangan->hapus($id);
    redirect ('ruangan');
  }
}
