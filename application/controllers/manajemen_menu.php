<?php 
/**
* 
*/
class Manajemen_menu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_manajemen_menu');
	}

	function index()
	{
		$data['title'] = 'Manajemen Menu';
		$data['record'] = $this->model_manajemen_menu->tampilkan_data();
		$this->template->load('template','manajemen_menu/lihat_data',$data);
	}
	function post()
	{
		if (isset($_POST['submit'])) {
			$this->model_manajemen_menu->post();
			redirect('manajemen_menu');
		} else {
			$data['title'] = 'Tambah manajemen menu';
			$this->template->load('template','manajemen_menu/form_input',$data);
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$this->model_manajemen_menu->edit();
			redirect('manajemen_menu');
		} else {
			$data['title'] = 'Edit manajemen menu';
			$id = $this->uri->segment(3);
			$data['record'] = $this->model_manajemen_menu->get_menu($id)->row_array();
			$this->template->load('template','manajemen_menu/form_edit',$data);
		}
	}
	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->model_manajemen_menu->hapus($id);
		redirect ('manajemen_menu');
	}
}