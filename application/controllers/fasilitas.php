<?php

class Fasilitas extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_fasilitas');
    check_session();
  }
  function index()
  {
    $data['title'] = 'Manajemen Fasilitas';
    $data['record'] = $this->model_fasilitas->tampilkan_data();
    $this->template->load('template','fasilitas/lihat_data',$data);
  }

  function post()
  {
    if (isset($_POST['submit'])) {
      $this->model_fasilitas->post();
      redirect('fasilitas');
    } else {
      $data['title'] = 'Tambah Fasilitas';
      $this->template->load('template','fasilitas/form_input',$data);
    }
  }

  function edit()
  {
    if (isset($_POST['submit'])) {
      $this->model_fasilitas->edit();
      redirect('fasilitas');
    } else {
      $id = $this->uri->segment(3);
      $data['title'] = 'Edit Fasilitas';
      $data['record'] = $this->model_fasilitas->get_fasilitas($id)->row_array();
      $this->template->load('template','fasilitas/form_edit',$data);
    }
  }
  function hapus()
  {
    $id = $this->uri->segment(3);
    $this->model_fasilitas->hapus($id);
    redirect ('fasilitas');
  }

}
