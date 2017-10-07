<?php 
/**
* 
*/
class Transaksi_ruangan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_transaksi_ruangan');
		$this->load->model('model_ruangan');
		check_session();
		
	}

	function index()
	{
		$data['title'] = 'Transaksi ruangan';
		$data['record'] = $this->model_transaksi_ruangan->tampilkan_data();
		

		$data['ruangan'] = $this->model_ruangan->tampilkan_data()->result();
		$this->template->load('template','transaksi_ruangan/lihat_data',$data);
	}

	function daftar_sewa()
	{

		$id = $this->uri->segment(3);
		$data['title'] = 'Daftar sewa';

		$data['record'] = $this->model_transaksi_ruangan->tampilkan_data()->result();
		$data['ruangan'] = $this->model_ruangan->get_ruangan($id)->row_array();
		$this->template->load('template','transaksi_ruangan/daftar_sewa',$data);
		
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			$this->model_transaksi_ruangan->post();
			redirect('transaksi_ruangan');
		} else {
			$data['title'] = 'Tambah transaksi ruangan';
			$id = $this->uri->segment(3);

			$this->load->model('model_ruangan');

			$data['ruangan'] = $this->model_ruangan->tampilkan_data()->result();

			$data['record'] = $this->model_transaksi_ruangan->get_ruangan($id)->row_array();
			$this->template->load('template','transaksi_ruangan/form_input',$data);
		}
	}
	function selesai()
	{
		$id = $this->uri->segment(3);
		$this->model_transaksi_ruangan->selesai($id);
		redirect ('transaksi_ruangan');
	}

	function laporan_ruangan()
	{

		if (isset($_POST['submit'])) 
		{
			$tanggal1=  $this->input->post('tanggal1');
			$tanggal2=  $this->input->post('tanggal2');

			$data['title'] = 'Laporan transaksi ruangan';
			$data['record'] = $this->model_transaksi_ruangan->laporan_periode_ruangan($tanggal1,$tanggal2);
			$this->template->load('template','transaksi_ruangan/laporan_ruangan',$data);
		} else {

			$data['title'] = 'Laporan transaksi ruangan';
			$data['record'] = $this->model_transaksi_ruangan->laporan_default_ruangan();
			$this->template->load('template','transaksi_ruangan/laporan_ruangan',$data);
		}

	}

	function laporan_excel_ruangan()
	{
		header("Content-type=appalication/vnd.ms-excel");
		header("content-disposition:attachment;filename=laporan_transaksi_ruangan.xls");

		$data['record'] = $this->model_transaksi_ruangan->laporan_default_ruangan();
		$this->load->view('transaksi_ruangan/laporan_excel_ruangan',$data);
	}


}