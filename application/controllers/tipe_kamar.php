<?php

class Tipe_kamar extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_tipe_kamar');
    check_session();
  }
  function index()
  {
    $data['title'] = 'Manajemen tipe kamar';
    $data['record'] = $this->model_tipe_kamar->tampilkan_data();
    $this->template->load('template','tipe_kamar/lihat_data',$data);
  }

  function post()
  {
    if (isset($_POST['submit'])) {
      $this->model_tipe_kamar->post();
      redirect('tipe_kamar');
    } else {
      $data['title'] = 'Tambah tipe kamar';
      $this->template->load('template','tipe_kamar/form_input',$data);
    }
  }

  function edit()
  {
    if (isset($_POST['submit'])) {
      $this->model_tipe_kamar->edit();
      redirect('tipe_kamar');
    } else {
      $data['title'] = 'Edit tipe kamar';
      $id = $this->uri->segment(3);
      $data['record'] = $this->model_tipe_kamar->get_tipe_kamar($id)->row_array();
      $this->template->load('template','tipe_kamar/form_edit',$data);
    }
  }
  function hapus()
  {
    $id = $this->uri->segment(3);
    $this->model_tipe_kamar->hapus($id);
    redirect ('tipe_kamar');
  }

}
