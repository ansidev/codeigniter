<?php $this->load->view('layout/head'); ?>
  <body>
    <div class="container">
      <?php $this->load->view('layout/site-brand'); ?>
      <?php
        $this->load->view('layout/post/add_post');
      ?>
      <?php $this->load->view('layout/footer'); ?>
    </div> <!-- /container -->
    <?php $this->load->view('layout/foot');?>