<?php 

/**
* 
*/
class Jenis_ruangan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_jenis_ruangan');
		check_session();
		

	}

	function index()
	{
		$data['title'] = 'Manajemen jenis ruangan';
		$data['record'] = $this->model_jenis_ruangan->tampilkan_data();
		$this->template->load('template','jenis_ruangan/lihat_data',$data);
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			$this->model_jenis_ruangan->post();
			redirect('jenis_ruangan');
		} else {
			$data['title'] = 'Tambah jenis ruangan';
			$this->template->load('template','jenis_ruangan/form_input',$data);
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$this->model_jenis_ruangan->edit();
			redirect('jenis_ruangan');
		} else {
			$data['title'] = 'Edit jenis ruangan';
			$id = $this->uri->segment(3);
			$data['record'] = $this->model_jenis_ruangan->get_jenis_ruangan($id)->row_array();
			$this->template->load('template','jenis_ruangan/form_edit',$data);
		}
	}
	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->model_jenis_ruangan->hapus($id);
		redirect ('jenis_ruangan');
	}
}