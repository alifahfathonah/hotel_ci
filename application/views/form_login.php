
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem booking ruangan dan kamar hotel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css" media="screen">
    .login-page {
      background: url(<?=base_url()?>assets/dist/img/bg.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
  <!-- <div class="login-logo">
    
</div> -->
<!-- /.login-logo -->
<div class="login-box-body">
  <img src="<?php echo base_url(); ?>assets/dist/img/hotel.png" width="100%">
  <br>
  <br>
  <p class="login-box-msg"><span class="btn bg-purple btn-flat">Sistem sewa kamar dan ruangan hotel</span></p>
  <?php
  echo form_open('auth/login');
  ?>
  <div class="form-group has-feedback">
    <input type="text" name="username" placeholder="username" class="form-control">
    <span class="fa fa-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
    <input type="password" name="password" placeholder="password" class="form-control">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
  </div>

  <div class="form-group has-feedback">
    <select name="level" class="form-control">
      <option value="Resepsionis">Resepsionis</option>
      <option value="Manajemen">Manajemen</option>
      <option value="Super Admin">Super Admin</option>
    </select>
  </div>

  <div class="row">
    <!-- /.col -->
    <div class="col-xs-4">
      <button type="submit" class="btn bg-purple" name="submit">Login</button>
    </div>
    <!-- /.col -->
  </div>
</form>
</div>
<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
