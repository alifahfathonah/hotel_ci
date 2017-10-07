<?php

class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_session();
  }

  function index()
  {
    $data['title'] = 'Sistem sewa ruangan dan kamar hotel';
    $this->template->load('template','view_dashboard',$data );
  }
}
