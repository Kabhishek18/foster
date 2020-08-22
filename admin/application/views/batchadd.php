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
                            <h2 class="content-header-title float-left mb-0">Batch</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('batch')?>">Batch</a>
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
                                    <h4 class="card-title">Batch Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('home/Batchinsert','class="form-horizontal"') ?> 
                                            <?php if($datalist){?>
                                            <input type="hidden" name="batch_id" value="<?=$datalist['batch_id']?>">
                                        <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Batch Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="batch_name" class="form-control" placeholder="Batch Name" required data-validation-required-message="This Batch Name field is required" value="<?=(!empty($datalist['batch_name'])?$datalist['batch_name']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php if(!empty($datalist)){?>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Batch Token </label>
                                                            <input type="text" name="batch_token" class="form-control" placeholder="Batch Token" value="<?=(!empty($datalist['batch_token'])?$datalist['batch_token']:'')?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php }?>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Start Date <span class="text-danger">*</span></label>
                                                            <input type="date" name="batch_start" class="form-control" placeholder="Start Date" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['batch_start'])?$datalist['batch_start']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>End Date <span class="text-danger">*</span></label>
                                                            <input type="date" name="batch_end" class="form-control" placeholder="End Batch" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['batch_end'])?$datalist['batch_end']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Start Time <span class="text-danger">*</span></label>
                                                            <input type="Time" name="batch_timestart" class="form-control" placeholder="Start Time" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['batch_timestart'])?$datalist['batch_timestart']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>End Time <span class="text-danger">*</span></label>
                                                            <input type="Time" name="batch_timeend" class="form-control" placeholder="End Time" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['batch_timeend'])?$datalist['batch_timeend']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Batch Type <span class="text-danger">*</span></label>
                                                            <input type="text" name="batch_type" class="form-control" placeholder="Batch Type" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['batch_type'])?$datalist['batch_type']:'')?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <?php if($datalist){
                                                    if($datalist['user_id']){?>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Book By Id <span class="text-danger">*</span></label>
                                                            <?php $student = $this->home_model->ListStudent($datalist['user_id']);?>
                                                            <input type="text" name="batch_type" class="form-control" placeholder="Batch Type" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['user_id'])?$student['users_name'].' ( '.$student['users_email'].' )':'')?>" Disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                               <?php }}?>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Tutors Name <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="course_parent_id" required="">
                                                                    <?php $opt=$this->home_model->ListTutorActive();
                                                                        foreach ($opt as $key ) { ?>
                                                                          <option value="<?=$key['users_id']?>"><?=$key['users_name']?> </option>  
                                                                    <?php    }?>


                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Batch Description<span class="text-danger">*</span></label>
                                                  
                                                    <?php if(!empty($datalist['batch_description'])){?>
                                                         <textarea name="batch_description" contenteditable="true" disabled="">
                                                        <?php $descrip =json_decode($datalist['batch_description']);
                                                        echo "Email : ".$descrip->email."</br>";
                                                        echo "Number : ".$descrip->number."</br>";
                                                        echo "Plan : ".$descrip->plan."</br>";
                                                        echo "Joining : ".$descrip->join."</br>";
                                                        echo "Message : ".$descrip->message."</br>";
                                                    }else{?>
                                                         <textarea name="batch_description" contenteditable="true">
                                                    <?php }?>    
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('batch_description');
                                                       
                                                   </script>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Status Active/Inactive  </label>
                                                            <select class="form-control" name="batch_status">

                                                                <?php if($datalist){ 
                                                                if($datalist['batch_status']==0){?>
                                                                   <option value="0" selected="">Active</option>
                                                                   <optgroup></optgroup>
                                                                  <?php }else{?>
                                                                  <option value="1" selected="">INnactive</option> 
                                                                  <optgroup></optgroup>
                                                                  <?php }}?> 
                                                                
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