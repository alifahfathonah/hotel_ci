<?php

class Lantai_kamar extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_lantai');
    check_session();
  }
  function index()
  {
    $data['title'] = 'Manajemen lantai kamar';
    $data['record'] = $this->model_lantai->tampilkan_data();
    $this->template->load('template','lantai_kamar/lihat_data',$data);
  }

  function post()
  {
    if (isset($_POST['submit'])) {
      $this->model_lantai->post();
      redirect('lantai_kamar');
    } else {
      $data['title'] = 'Tambah lantai kamar';
      $this->template->load('template','lantai_kamar/form_input',$data);
    }
  }

  function edit()
  {
    if (isset($_POST['submit'])) {
      $this->model_lantai->edit();
      redirect('lantai_kamar');
    } else {
      $data['title'] = 'Edit lantai kamar';
      $id = $this->uri->segment(3);
      $data['record'] = $this->model_lantai->get_lantai($id)->row_array();
      $this->template->load('template','lantai_kamar/form_edit',$data);
    }
  }
  function hapus()
  {
    $id = $this->uri->segment(3);
    $this->model_lantai->hapus($id);
    redirect ('lantai_kamar');
  }

}
