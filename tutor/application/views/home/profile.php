  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Personal Informations</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php echo form_open_multipart('home/ProfileUpdate','')?>
                <div class="card-body">
                 <?php if($this->session->flashdata('success')){ ?>

                    <div class="alert alert-success" role="alert">
                                            <p class="mb-0">
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </p>
                                        </div>
                                       
                         <?php }elseif($this->session->flashdata('error')){ ?>  
                       <div class="alert alert-danger" role="alert">
                                            <p class="mb-0">
                                               <?php echo $this->session->flashdata('error'); ?>
                                            </p>
                                        </div>
                        <?php }?>  
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email"  id="exampleInputEmail1" placeholder="Enter email" value="<?=(!empty($users_email)?$users_email:'')?>" disabled>
                  </div>
                    <input type="hidden" name="userid" value="<?=(!empty($users_id)?$users_id:'')?>">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" name="username"  id="exampleInputEmail1" placeholder="Enter Full Name" value="<?=(!empty($users_name)?$users_name:'')?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="number" class="form-control" name="mobile"  id="exampleInputEmail1" placeholder="Enter Mobile" value="<?=(!empty($users_mobile)?$users_mobile:'')?>"  required>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              <?php echo form_close() ?>
            </div>
            <!-- /.card -->

           </div>


         <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Profile Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php echo form_open_multipart('home/ProfileImage','')?>
                <div class="card-body">
                 <?php if($this->session->flashdata('successimage')){ ?>

                    <div class="alert alert-success" role="alert">
                                            <p class="mb-0">
                                                <?php echo $this->session->flashdata('successimage'); ?>
                                            </p>
                                        </div>
                                       
                         <?php }elseif($this->session->flashdata('errorimage')){ ?>  
                       <div class="alert alert-danger" role="alert">
                                            <p class="mb-0">
                                               <?php echo $this->session->flashdata('errorimage'); ?>
                                            </p>
                                        </div>
                        <?php }?>  
                    <input type="hidden" name="userid" value="<?=(!empty($users_id)?$users_id:'')?>">
                 <?php if($users_image !=null){?>
                 <div class="form-group">
                   <label for="exampleInputFile">Profile Image</label>
                   <div class="input-group">
                      <img src="<?=base_url()?>/uploads/<?=(!empty($users_id)?$users_id:'')?>/<?=(!empty($users_image)?$users_image:'')?>"  style="width: 30%">
                   </div>
                 </div>
                  <?php }?>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="profile_image" id="exampleInputFile" required="">
                        <label class="custom-file-label" for="exampleInputFile">Profile Image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              <?php echo form_close() ?>
            </div>
            <!-- /.card -->

          </div>


             <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Password Policy</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php echo form_open_multipart('home/Updatepass','')?>
                <div class="card-body">
                 <?php if($this->session->flashdata('passsuccess')){ ?>

                    <div class="alert alert-success" role="alert">
                                            <p class="mb-0">
                                                <?php echo $this->session->flashdata('passsuccess'); ?>
                                            </p>
                                        </div>
                                       
                         <?php }elseif($this->session->flashdata('passerror')){ ?>  
                       <div class="alert alert-danger" role="alert">
                                            <p class="mb-0">
                                               <?php echo $this->session->flashdata('passerror'); ?>
                                            </p>
                                        </div>
                        <?php }?>  
                    
                    <input type="hidden" name="userid" value="<?=(!empty($users_id)?$users_id:'')?>">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              <?php echo form_close() ?>
            </div>
            <!-- /.card -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>