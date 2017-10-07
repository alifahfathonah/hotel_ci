<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/pace/pace.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-datetimepicker.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jQueryUI/jquery-ui.css">
  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/jQueryUI/jquery-ui.min.js"></script>



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css" media="screen">
    .content-wrapper, .right-side {
      min-height: 100%;
      background: url(<?=base_url()?>assets/dist/img/bg-admin.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-purple-light fixed sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url(); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>BK</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SIS</b>BOOK</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>assets/dist/img/user.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo ucfirst($this->session->userdata('username')); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/dist/img/user.png" class="img-circle" alt="User Image">

                  <p>
                    <?php echo ucfirst($this->session->userdata('username')); ?>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url() ?>auth/logout" class="btn btn-default btn-flat">Keluar</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url(); ?>assets/dist/img/user.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo ucfirst($this->session->userdata('username')); ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>

          <?php 
          if ($this->session->userdata('level') == 'Super Admin') {
            $menu = $this->db->get_where('tb_menu',array('level'=>'Super Admin'));
            foreach ($menu->result() as $main) {
              echo "<li>" . anchor($main->link, '<i class="' . $main->icon . '"></i>' . "<span>$main->nama_menu</span>") . "</li>";
            }
          } else if ($this->session->userdata('level') == 'Resepsionis') {
            $menu = $this->db->get_where('tb_menu',array('level'=>'Resepsionis'));
            foreach ($menu->result() as $main) {
              echo "<li>" . anchor($main->link, '<i class="' . $main->icon . '"></i>' . "<span>$main->nama_menu</span>") . "</li>";
            }
          } else if ($this->session->userdata('level') == 'Manajemen') {
            $menu = $this->db->get_where('tb_menu',array('level'=>'Manajemen'));
            foreach ($menu->result() as $main) {
              echo "<li>" . anchor($main->link, '<i class="' . $main->icon . '"></i>' . "<span>$main->nama_menu</span>") . "</li>";
            }
          }
          ?>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <?php echo $contents; ?>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> Alpha
      </div>
      <strong>Copyright &copy; 2016 <a href="<?php echo base_url(); ?>">Hotel Kita</a>.</strong> All rights
      reserved.
    </footer>
  </div>
  <!-- ./wrapper -->


  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
  <!-- InputMask -->
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- date-range-picker -->
  <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="<?php echo base_url(); ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="<?php echo base_url(); ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>

  <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
  <script type="text/javascript">
    $(document).ajaxStart(function() { Pace.restart(); });
  </script>
  <script>
    $(function () {
      $(".select2").select2();
      $("[data-mask]").inputmask();
      $('[data-toggle="lantai2_kosong"]').tooltip();
      $("#fasilitas").DataTable();
      $("#user").DataTable();
      $("#kelas").DataTable();
      $("#tipe_kamar").DataTable();
      $("#lantai_kamar").DataTable();
      $("#kamar").DataTable();
      $("#transaksi").DataTable();
      $("#jenis_ruangan").DataTable();
      $("#ruangan").DataTable();
      $("#transaksi_ruangan").DataTable();
      $("#menu").DataTable();
    });
  </script>
  <script type="text/javascript">
   $(function () {
    $('#datetimepicker').datetimepicker({
     format: 'YYYY-MM-DD HH:mm:ss',
   });

    $('#datepicker').datetimepicker({
     format: 'YYYY-MM-DD',
   });

    $('#datepicker2').datetimepicker({
     format: 'YYYY-MM-DD',
   });

    $('#timepicker').datetimepicker({
     format: 'HH:mm'
   });
  });
</script>
</body>
</html>
