<?php

/**
 *
 */
class Kamar extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_kamar');
    check_session();
  }
  function index()
  {
    $data['title'] = 'Manajemen Kamar';
    $data['record'] = $this->model_kamar->tampilkan_data();
    $this->template->load('template','kamar/lihat_data',$data);
  }

  function post()
  {
    if (isset($_POST['submit'])) {
      $this->model_kamar->post();
      redirect('kamar');
    } else {
      $data['title'] = 'Tambah Kamar';
      $this->load->model('model_lantai');
      $this->load->model('model_kelas');
      $this->load->model('model_tipe_kamar');
      // $this->load->model('model_fasilitas');

      $data['lantai_kamar'] = $this->model_lantai->tampilkan_data()->result();
      $data['nama_kelas']   = $this->model_kelas->tampilkan_data()->result();
      $data['tipe_kamar']   = $this->model_tipe_kamar->tampilkan_data()->result();
      // $data['fasilitas']    = $this->model_fasilitas->tampilkan_data()->result();
      $this->template->load('template','kamar/form_input',$data);
    }
  }

  function edit()
  {
    if (isset($_POST['submit'])) {
      $this->model_kamar->edit();
      redirect('kamar');
    } else {
      $data['title'] = 'Edit Kamar';
      $id = $this->uri->segment(3);

      $this->load->model('model_lantai');
      $this->load->model('model_kelas');
      $this->load->model('model_tipe_kamar');
      //$this->load->model('model_fasilitas');

      $data['lantai_kamar'] = $this->model_lantai->tampilkan_data()->result();
      $data['nama_kelas']   = $this->model_kelas->tampilkan_data()->result();
      $data['tipe_kamar']   = $this->model_tipe_kamar->tampilkan_data()->result();
      //$data['fasilitas']    = $this->model_fasilitas->tampilkan_data()->result();

      $data['record'] = $this->model_kamar->get_kamar($id)->row_array();
      $this->template->load('template','kamar/form_edit',$data);
    }
  }
  function hapus()
  {
    $id = $this->uri->segment(3);
    $this->model_kamar->hapus($id);
    redirect ('kamar');
  }
}
