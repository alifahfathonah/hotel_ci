<?php

class Transaksi extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('model_transaksi');
    check_session();
  }

  function index()
  {
    $data['title'] = 'Transaksi kamar';
    $data['record'] = $this->model_transaksi->tampilkan_data();

    $this->load->model('model_kamar');
    $data['kamar'] = $this->model_kamar->tampilkan_data()->result();
    $this->template->load('template','transaksi/lihat_data',$data);
  }

  function post()
  {
    if (isset($_POST['submit'])) {
      $this->model_transaksi->post();
      redirect('transaksi');
    } else {
      $this->load->model('model_kamar');

      $data['kamar'] = $this->model_kamar->tampilkan_data()->result();
      $this->template->load('template','transaksi/form_input',$data);
    }
  }

  function pilih_kamar()
  {
    if (isset($_POST['submit'])) {
      $this->model_transaksi->pilih_kamar();
      redirect('transaksi');
    } else {
      $data['title'] = 'Transaksi';
      $id = $this->uri->segment(3);

      $this->load->model('model_kamar');

      $data['kamar'] = $this->model_kamar->tampilkan_data()->result();

      $data['record'] = $this->model_transaksi->get_kamar($id)->row_array();
      $this->template->load('template','transaksi/pilih_kamar',$data);
    }
  }

  function check_out()
  {
    $id = $this->uri->segment(3);
    $this->model_transaksi->check_out($id);
    redirect ('transaksi');
  }

  function laporan_kamar()
  {

    if (isset($_POST['submit'])) 
    {
      $tanggal1=  $this->input->post('tanggal1');
      $tanggal2=  $this->input->post('tanggal2');
      
      $data['title'] = 'Laporan transaksi kamar';
      $data['record'] = $this->model_transaksi->laporan_periode_kamar($tanggal1,$tanggal2);
      $this->template->load('template','transaksi/laporan_kamar',$data);
    } else {
      
      $data['title'] = 'Laporan transaksi kamar';
      $data['record'] = $this->model_transaksi->laporan_default_kamar();
      $this->template->load('template','transaksi/laporan_kamar',$data);
    }
    
  }

  function laporan_excel_kamar()
  {
    header("Content-type=appalication/vnd.ms-excel");
    header("content-disposition:attachment;filename=laporan_transaksi_kamar.xls");

    $data['record'] = $this->model_transaksi->laporan_default_kamar();
    $this->load->view('transaksi/laporan_excel_kamar',$data);
  }
  
  
}
