<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?=base_url()?>"><b>Foster</b>Bright</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">
      	
      	<?php if($this->session->flashdata('error')){ ?>
        <?php echo $this->session->flashdata('error'); } ?>
        <?php if($this->session->flashdata('success')){ ?>
        <?php echo $this->session->flashdata('success'); } ?>	
      </p>


      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
      <p class="mb-0">
        <a href="<?=base_url()?>" class="text-center">Back To Homepage</a>
      </p>
    </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
	