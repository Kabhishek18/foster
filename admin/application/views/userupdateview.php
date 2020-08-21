<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<?php require('include/nav.php')?>
 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">User</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript: void0">User</a>
                                    </li>
                                    <li class="breadcrumb-item active">Update
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
                                    <h4 class="card-title">Update User </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('Admin/Userupdate','class="form-horizontal novalidate"') ?> 
                                            <input type="hidden" name="id" value="<?=$data['id']?>">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Username</label>
                                                            <input type="text" name="username" class="form-control" placeholder="User Name" required data-validation-required-message="This User Name field is required" value="<?=$data['user_name']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Email</label>
                                                            <input type="email" name="email" class="form-control" placeholder="Email" required data-validation-required-message="This Email field is required" value="<?=$data['user_email']?>">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Password here</label>
                                                            <input type="password" name="password" class="form-control" placeholder="Password" required data-validation-required-message="This Password field is required" value="<?=$data['user_password']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Image File</label>
                                                            <?php $img =unserialize($data['user_image']);?>
                                                            <input type="file" name="file" class="form-control"  value="<?=base_url()?>resource/upload/<?=$img['file_name']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-2">
                                                    
                                                    
                                                            <img class="round" src="<?=base_url()?>resource/upload/<?=$img['file_name']?>" width ="50px">
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        	<label>Select User Type</label>
                                                            <select class="form-control" name="user_type">
                                                                <optgroup>Selected
                                                                    <option value="<?=$data['user_type']?>"><?php 
                                                        if($data['user_type']=='0'){
                                                            echo "Super";
                                                        }elseif($data['user_type']=='1'){echo "Admin";}
                                                        else{echo "User";}?>
                                                                        
                                                                    Selected </option>
                                                                </optgroup>
                                                                <optgroup>
                                                            	<option value="0">Super</option>
                                                            	<option value="1">Admin</option>
                                                            	<option value="2">User</option>
                                                            </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Status Active/Inactive  </label>
                                                            <select class="form-control" name="user_status">
                                                                <optgroup>Selected 
                                                                    <option value="<?=$data['user_status']?>"><?php 
                                                        if($data['user_status']=='0'){
                                                            echo "Active";
                                                        }
                                                        else{echo "Inactive";}?>
                                                                        
                                                                    Selected </option>
                                                                </optgroup>
                                                                <optgroup>

                                                                <option value="0">Active</option>
                                                                <option value="1">Inactive</option>
                                                               </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary" >Update</button>
                                           
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