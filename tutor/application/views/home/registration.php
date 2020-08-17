<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?=base_url()?>"><b>Foster</b>Bright</a>
   </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      <p><?php if($this->session->flashdata('error')){ ?>
                            <?php echo $this->session->flashdata('error'); } ?>
                            <?php if($this->session->flashdata('success')){ ?>
                            <?php echo $this->session->flashdata('success'); } ?> </p>

      <form action="<?=base_url()?>home/Registeration" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name= "username" placeholder="Full name" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name ="email" placeholder="Email" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="cpassword" placeholder="Retype password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required="" >
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="<?=base_url()?>" class="text-center">I already have a membership</a>
      </div>

      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>