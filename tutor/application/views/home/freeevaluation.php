  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Free Evaluation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Free Evaluation</li>
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Free Evaluation Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
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
                        


                          <ul style="list-style-type: disc;">
                        <?php $student =$this->home_model->ListStudent();
                        $user = directory_map('../student/uploads/');
                            foreach ($student as $std) {?>
                              <li> <?=$std['users_name']?> (<?=$std['users_email']?>)
                               <?php foreach ($user[$std['users_id'].'/'] as $key) {
                                  foreach ( $key as $value) {?>
                                                 <ul style="list-style-type: square;">
                                                <li>
                                                  <div class="media-body">
                                                    <p class="mb-0"><?=$value?></p>
                                                       <a href="../student/uploads/<?=$std['users_id']?>/sample/<?=$value?>" style="color: blue" download>Download</a>
                                                    </div>
                                                </li>
                                              </ul>
                                          <?php }} ?>

                                </li>
                               <?php }?>            
                          </ul>                
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

        </div>



        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>