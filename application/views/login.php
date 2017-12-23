<!DOCTYPE >
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PENGUMUMAN STIKI</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
		<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href=""><b>SIKAP</b></a>
			</div>
			<div class="login-box-body">
				<form action="<?php echo base_url()?>login/to_login" method="post">
					<div class="form-group has-feedback">
						<input type="email" class="form-control" placeholder="Email" name="user">
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" placeholder="Password" name="pass">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- Bootstrap 3.3.7 -->
		<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>