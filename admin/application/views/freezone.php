<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<?php require('inc/nav.php')?>

    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Freezone</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('freezone')?>">Freezone</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add / Delete
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                   
                </div>
            </div>
            <div class="content-body">
                <!-- card actions section start -->
                <section id="card-actions">
                    <?php if($this->session->flashdata('success')){ ?>

                    <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading">Success</h4>
                                            <p class="mb-0">
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </p>
                                        </div>
                                       
                         <?php }elseif($this->session->flashdata('warning')){ ?>  
                       <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading">Danger</h4>
                                            <p class="mb-0">
                                               <?php echo $this->session->flashdata('warning'); ?>
                                            </p>
                                        </div>
                        <?php }?> 
                    <!-- Collapsible and Refresh Action starts -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Freezone Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('home/FreeUpload','class="form-horizontal"') ?> 
                                        

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Freezone Type  </label>
                                                            <select class="form-control" name="status">
                                                                <option value="reading">Reading</option>
                                                                <option value="writing">Writing</option>
                                                               <option value="listening">Listening</option>
                                                               <option value="speaking">Speaking</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        <input type="file" class="form-control" name="file" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                    
                                            <button type="submit" class="btn btn-primary" >Submit</button>
                                                        </div>
                                                    </div>
                                            </div>            
                                        <?php echo form_close() ?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>
            </div>

              <div class="content-body">
                <!-- card actions section start -->
                <section id="card-actions">
                  
                    <!-- Collapsible and Refresh Action starts -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Uploaded File </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                       <div class="col-lg-6">
                            <h5 class="title"> Reading</h5>
                                <ul style="list-style-type: square;">
                                 <?php
                                    $map = directory_map('../admin/uploads/reading');
                                    foreach ($map as $key) {?>

                                                <li>
                                                    <div class="media-body">
                                                    <p class="mb-0"><?=$key?></p>
                                                    <a href="../admin/uploads/reading/<?=$key?>" style="color: green" target="_top" >View</a>   
                                                       <a href="../admin/uploads/reading/<?=$key?>" style="color: blue" download>Download</a>
                                                       <a href="<?=base_url()?>Home/DeleteEval/reading/<?=$key?>" style="color: red">Delete</a>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                        </div>  
                        <div class="col-lg-6">
                            <h5 class="title"> Writing</h5>
                            <ul style="list-style-type: square;">
                                 <?php
                                    $map = directory_map('../admin/uploads/writing');
                                    foreach ($map as $key) {?>

                                                <li>
                                                    <div class="media-body">
                                                    <p class="mb-0"><?=$key?></p>
                                                    <a href="../admin/uploads/writing/<?=$key?>" style="color: green" target="_top" >View</a>   
                                                       <a href="../admin/uploads/writing/<?=$key?>" style="color: blue" download>Download</a>
                                                        <a href="<?=base_url()?>Home/DeleteEval/writing/<?=$key?>" style="color: red">Delete</a>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="title"> Speaking</h5>
                            <ul style="list-style-type: square;">
                                 <?php
                                    $map = directory_map('../admin/uploads/speaking');
                                    foreach ($map as $key) {?>

                                                <li>
                                                    <div class="media-body">
                                                    <p class="mb-0"><?=$key?></p>
                                                    <a href="../admin/uploads/speaking/<?=$key?>" style="color: green" target="_top" >View</a>  
                                                       <a href="../admin/uploads/speaking/<?=$key?>" style="color: blue" download>Download</a>
                                                         <a href="<?=base_url()?>Home/DeleteEval/speaking/<?=$key?>" style="color: red">Delete</a>

                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="title"> Listening</h5>
                                <ul style="list-style-type: square;">
                                 <?php
                                    $map = directory_map('../admin/uploads/listening');
                                    foreach ($map as $key) {?>

                                                <li>
                                                    <div class="media-body">
                                                    <p class="mb-0"><?=$key?></p>
                                                    <a href="../admin/uploads/listening/<?=$key?>" style="color: green" target="_top" >View</a>  
                                                       <a href="../admin/uploads/listening/<?=$key?>" style="color: blue" download>Download</a>
                                                        <a href="<?=base_url()?>Home/DeleteEval/listening/<?=$key?>" style="color: red">Delete</a>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>
            </div>
        </div>
    </div>


     