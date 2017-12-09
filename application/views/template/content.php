<div class="content-wrapper">
	<section class="content-header">
		<h1><?php echo @$title?></h1>
		<!-- <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Examples</a></li>
			<li class="active">Blank page</li>
		</ol> -->
	</section>
	<section class="content">
		<?php $this->load->view($page)?>
	</section>
</div>