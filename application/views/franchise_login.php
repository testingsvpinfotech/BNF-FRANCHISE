<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Logistics Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin_assets/dist/vendors/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin_assets/dist/vendors/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin_assets/dist/vendors/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">
<base href="<?php echo base_url(); ?>"> 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  
  <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
	<body class="hold-transition login-page" style="background-image: url('assets/images/image_bg.jpg'); width: 100% !important; 
  background-position: center !important;
  background-repeat: no-repeat !important;
  background-size: cover !important;
  position: relative !important;
  background-attachment: fixed;">
		<div><br>
		<?php $alert =$this->db->query("select * from tbl_news where  franchise_status = '1' order by id desc limit 1")->row(); if(!empty($alert)){ ?>
                <b><marquee style="color:red;">
                    <?= $alert->news_details; ?>
        </marquee></b>
      <?php } if(empty($alert)){ ?>
			<div class="login-box">
			  <div class="login-logo">
				
			  </div>
			  <!-- /.login-logo -->
		  
			<div class="login-box-body">  
				<?php $company_details = $this->db->query('SELECT company_name FROM `tbl_company` ')->row();?>
				<h3 class="exp_heading"><center><?php echo $company_details->company_name; ?></center></h3>
				<h4 style="text-align: center;">Franchise</h4>
				</br>
			<!--	<center><p class="admin">Admin Login</p></center>-->
				
			<!-- <p class="login-box-msg">Sign in to start your session</p>-->
			<form action="<?php echo base_url();?>Franchise_customer_manager/index" method="post">
			  <div class="form-group has-feedback">
				<input type="email" name="email" class="form-control" placeholder="Email">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			  </div>
			  <div class="form-group has-feedback">
				<input type="password" name="password" class="form-control" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			  </div>
			  <div class="row">
				<div class="col-md-3 col-xs-3">
				  <!-- <div class="checkbox icheck">
					<label>
					  <input type="checkbox"> Remember Me
					</label>
				  </div> -->
				</div>
				<!-- /.col -->
				<div class="col-md-6 col-xs-6">
				  <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
				<div class="col-md-3 col-xs-3"></div>
				<!-- /.col -->
			  </div><br>
		
			</form>
             <?php } ?>
			<!-- <div class="social-auth-links text-center">
			  <p>- OR -</p>
			  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
				Facebook</a>
			  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
				Google+</a>
			</div> -->
			<!-- /.social-auth-links -->

			
		  <!--   <a href="register.html" class="text-center">Register a new membership</a> -->

		  </div>
		  <!-- /.login-box-body -->
		  
		</div> 
		<!-- /.login-box -->
	</div>


<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/web_assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/web_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/web_assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>
