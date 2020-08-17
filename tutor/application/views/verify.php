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
     <!--    <p>- OR -</p> -->
  		<p >
        	<a class="btn btn-large btn-warning" href="<?=base_url()?>home/ResendEmailVerification" > Click Here Resend Verfication Mail</a>
      	</p>
      <p class="mb-0">

      	<p>- OR -</p>
        <a href="<?=base_url()?>" class="text-center"><i class="fas fa-arrow-left"></i> Back To Homepage</a>
      </p>
    </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
	
