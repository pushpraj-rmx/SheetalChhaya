<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Login</title>
  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
<?php
error_reporting(0);
$this->load->helper('html');
$this->load->helper('url');
echo link_tag('application/views/sitepanel/bootstrap/css/bootstrap.min.css');
echo link_tag('application/views/sitepanel/dist/css/AdminLTE.min.css');
echo link_tag('application/views/sitepanel/plugins/iCheck/square/blue.css');
?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
<?php
$this->load->helper('directory'); //load directory helper
$adminimg = "application/views/images/"; // Your Path to folder
?>
	<a href="../"><center><img src="<?php echo base_url()."upload/".$websettings->website_logo; ?>"/></center></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <?php echo isset($error) ? $error : ''; ?> 
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo form_open('sitepanel/login'); ?>
      <div class="form-group has-feedback">
        <!--<input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Username">-->
        <?php echo form_input(['type'=>'text','name'=>'username','value'=>set_value('username'),'class'=>'form-control','placeholder'=>'Username']);?>
        <div style="color:red"><?php echo form_error('username');?></div>
		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password">
        <div style="color:red"><?php echo form_error('password');?></div>
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
			<a href="#">I forgot my password</a><br>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<?php
echo link_tag('application/views/sitepanel/plugins/jQuery/jquery-2.2.3.min.js');
echo link_tag('application/views/sitepanel/bootstrap/js/bootstrap.min.js');
echo link_tag('application/views/sitepanel/plugins/iCheck/icheck.min.js');
 ?>
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
