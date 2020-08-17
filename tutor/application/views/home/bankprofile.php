  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bank Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Bank Details</li>
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
                <h3 class="card-title">Account Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php echo form_open_multipart('home/BankUpdate','')?>
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
                        <?php  $banker = json_decode($users_bankaccount);?>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Account Number </label>
                    <input type="number" class="form-control" name="account_number"  id="exampleInputEmail1" placeholder="Enter Account Number" value="<?=(!empty($banker->account_number)?$banker->account_number:'')?>" >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Account Number </label>
                    <input type="number" class="form-control" name="confirm_number"  id="exampleInputEmail1" placeholder="Confirm Account Number" >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Account Holder's Name</label>
                    <input type="text" class="form-control" name="account_name"  id="exampleInputEmail1" placeholder="Enter Account Name" value="<?=(!empty($banker->account_name)?$banker->account_name:'')?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">IFSC Code</label>
                    <input type="text" name="ifsc_code" class="form-control" id="exampleInputPassword1" placeholder="IFSC Code" value="<?=(!empty($banker->ifsc_code)?$banker->ifsc_code:'')?>" >
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
                <h3 class="card-title">Pancard Id Upload</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <?php echo form_open_multipart('home/BankPanId','')?>
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
                      <img src="<?=base_url()?>/uploads/<?=(!empty($users_id)?$users_id:'')?>/<?=(!empty($users_pancard)?$users_pancard:'')?>"  style="width: 30%">
                   </div>
                 </div>
                  <?php }?>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="profile_image" id="exampleInputFile">
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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>