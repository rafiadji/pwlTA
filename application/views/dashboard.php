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
		<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<!-- jQuery 3 -->
		<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		
		<div class="wrapper">
			<?php include 'template/header.php';?>
			<?php include 'template/sidebar.php';?>
			<?php include 'template/content.php';?>
		</div>
		<!-- Bootstrap 3.3.7 -->
		<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- DataTables -->
		<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<!-- SlimScroll -->
		<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
		<script>
			$(document).ready(function () {
				$('.sidebar-menu').tree()
				$('.dataTable').DataTable({
					'ordering':false,
					'info':true
				})
			})
		</script>
	</body>
</html>