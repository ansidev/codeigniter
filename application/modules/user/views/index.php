<?php $this->load->view('layout/head'); ?>
<body>
<?php $this->load->view('layout/top-nav'); ?>
	<div class="container">
		<?php if($this->session->flashdata('message')):?>
			<div class="alert alert-success" role="alert">
				<?php echo $this->session->flashdata('message');?>
			</div>
		<?php endif;?>
		<div class="row">
			<ol>
			<?php if($query): foreach($query as $user): ?>
					<li><?php echo $user->user_username; ?></li>
			<?php endforeach ?>
			</ol>
			<?php endif; ?>
		</div><!-- /row -->
		<?php $this->load->view('layout/footer');?>
	</div> <!-- /container -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
<?php $this->load->view('layout/foot');?>