<?php $this->load->view('layout/head'); ?>
  <body>
    <?php $this->load->view('layout/top-nav'); ?>
    <?php $this->load->view('layout/jumbotron'); ?>
    <div class="container">
      <?php $this->load->view('layout/main'); ?>
      <hr>
      <?php $this->load->view('layout/footer'); ?>
    </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>