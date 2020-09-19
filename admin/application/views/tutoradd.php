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
                            <h2 class="content-header-title float-left mb-0">Tutor</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('tutor')?>">Tutor</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add
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
                                    <h4 class="card-title">Tutor Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('home/Tutorinsert','class="form-horizontal"') ?> 
                                            <?php if($datalist){?>
                                            <input type="hidden" name="users_id" value="<?=$datalist['users_id']?>">
                                        <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Tutor Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="users_name" class="form-control" placeholder="Tutor Name" required data-validation-required-message="This Name field is required" value="<?=(!empty($datalist['users_name'])?$datalist['users_name']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Tutor Email <span class="text-danger">*</span></label>
                                                            <input type="text" name="users_email" class="form-control" placeholder="Tutor Email" required data-validation-required-message="This Name field is required" value="<?=(!empty($datalist['users_email'])?$datalist['users_email']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Tutor Mobile <span class="text-danger">*</span></label>
                                                            <input type="text" name="users_mobile" class="form-control" placeholder="Tutor Mobile" required data-validation-required-message="This Name field is required" value="<?=(!empty($datalist['users_mobile'])?$datalist['users_mobile']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Status Active/Inactive  </label>
                                                            <select class="form-control" name="users_status">
                                                                <option value="0">Active</option>
                                                                <option value="1">Inactive</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" >Submit</button>
                                           
                                        <?php echo form_close() ?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>
            </div>
        </div>
    </div>