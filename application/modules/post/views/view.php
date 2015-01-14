<?php $this->load->view('layout/head'); ?>
  <body>
    <?php $this->load->view('layout/top-nav'); ?>
    <div class="container">
    	<div class="row">
	  	<?php if($query): foreach($query as $post):?>
	  		<div class="col-md-12">
				<h1>
				  	<a href="<?php echo base_url()."/post/view/".$post->post_id; ?>"><?php echo $post->post_title;?></a>
				  	<a href="<?php echo base_url()."/post/edit/".$post->post_id; ?>" style="border:none;">
				  	<span class="glyphicon glyphicon-edit"></span>
				  	</a>
				  	<a style="border:none;" onclick="javascript:deleteConfirm('<?php echo base_url()."post/delete/".$post->post_id;?>');" deleteConfirm href="#">
                        <span class="glyphicon glyphicon-remove"></span>
                    </a>
				</h1>
				<?php Console::log($query);?>
				<h5>Posted on <strong><?php echo html_entity_decode($post->post_date);?></strong> | Author: <strong><?php echo $post->user_fullname;?></strong></h5>
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
    <script type="text/javascript"> 
    function deleteConfirm(url)
    {
        if(confirm('Do you want to delete this post?'))
        {
            window.location.href=url;
        }
    }
    </script>
    <?php $this->load->view('layout/foot');?>