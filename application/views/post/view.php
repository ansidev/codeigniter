<?php $this->load->view('layout/head'); ?>
  <body>
    <?php $this->load->view('layout/top-nav'); ?>
    <div class="container">
    	<div class="row">
	  	<?php if($query): foreach($query as $post):?>
	  		<div class="col-md-12">
				  <h1>
				  	<?php echo $post->post_title;?>
					</h1>
					<h6>
				  	Posted on <?php echo $post->post_date;?>
					</h6>
			  	<?php echo $post->post_content;?>
			</div>
		  <?php endforeach; else:?>
			  <div class="col-md-12">
			  	<h1>No entry yet!</h1>
			  </div>
		  <?php endif;?>
	  	</div><!-- /row -->
      <?php $this->load->view('layout/footer'); ?>
    </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>