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
                            <h2 class="content-header-title float-left mb-0">Course</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('course')?>">Course</a>
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
                                    <h4 class="card-title">Course Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('home/Courseinsert','class="form-horizontal"') ?> 
                                            <?php if($datalist){?>
                                            <input type="hidden" name="course_id" value="<?=$datalist['course_id']?>">
                                        <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Course Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="course_name" class="form-control" placeholder="Course Name" required data-validation-required-message="This Course Name field is required" value="<?=(!empty($datalist['course_name'])?$datalist['course_name']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Regular Price </label>
                                                            <input type="number" name="regular_price" class="form-control" placeholder="Regular Price" value="<?=(!empty($datalist['regular_price'])?$datalist['regular_price']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Sales Price <span class="text-danger">*</span></label>
                                                            <input type="number" name="sale_price" class="form-control" placeholder="Sale Price" required data-validation-required-message="This Sale Price is required" value="<?=(!empty($datalist['sale_price'])?$datalist['sale_price']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Category Name <span class="text-danger">*</span></label>
	                                                            <select class="form-control" name="course_parent_id" required="">
                                                                    <?php if($datalist['course_parent_id']){
                                                                     $scat=$this->home_model->ListCategory($datalist['course_parent_id']);
                                                                    ?>
                                                                    <optgroup class="select2-results__group">Selected</optgroup>
                                                                    <option value="<?=$scat['category_id']?>">
                                                                       <?=$scat['category_name']?>
                                                                    </option>
                                                                     <optgroup class="select2-results__group">Unselected</optgroup>
                                                                    <?php }?>
                                                                    <option value="" class="select2-results__group">Choose</option>
                                                                    <?php $cat=$this->home_model->ListCategory();
                                                                           foreach ($cat as $option) {?>
                                                                    <option value="<?=$option['category_id']?>"><?=$option['category_name']?></option>           
                                                                     <?php   } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Session <span class="text-danger">*</span></label>
                                                            <input type="text" name="course_session" class="form-control" placeholder="Course Session" required data-validation-required-message="This Course Session is required" value="<?=(!empty($datalist['course_session'])?$datalist['course_session']:'')?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Type <span class="text-danger">*</span></label>
                                                            <input type="text" name="course_type" class="form-control" placeholder="Course Type" required data-validation-required-message="This course type is required" value="<?=(!empty($datalist['course_type'])?$datalist['course_type']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Hours<span class="text-danger">*</span></label>
                                                            <input type="text" name="course_hours" class="form-control" placeholder="Course Hours" required data-validation-required-message="This Course Hours is required" value="<?=(!empty($datalist['course_hours'])?$datalist['course_hours']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Tenure<span class="text-danger">*</span></label>
                                                            <input type="text" name="course_tenure" class="form-control" placeholder="Course Tenure" required data-validation-required-message="This Course Tenure is required" value="<?=(!empty($datalist['course_tenure'])?$datalist['course_tenure']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Timing<span class="text-danger">*</span></label>
                                                            <input type="text" name="course_timing" class="form-control" placeholder="Course Timing" required data-validation-required-message="This Course Timing is required"  value="<?=(!empty($datalist['course_timing'])?$datalist['course_timing']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Complimentay<span class="text-danger">*</span></label>
                                                            <input type="text" name="course_complimentary" class="form-control" placeholder="Course Complimentay" required data-validation-required-message="This Course Complimentay is required"  value="<?=(!empty($datalist['course_complimentary'])?$datalist['course_complimentary']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Access<span class="text-danger">*</span></label>
                                                            <input type="text" name="course_access" class="form-control" placeholder="Course Access" required data-validation-required-message="This Course Access is required"  value="<?=(!empty($datalist['course_access'])?$datalist['course_access']:'')?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Information<span class="text-danger">*</span></label>
                                                   <textarea name="course_information" contenteditable="true">
                                                    <?=(!empty($datalist['course_information'])?$datalist['course_information']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('course_information');
                                                       
                                                   </script>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Short Desciprition<span class="text-danger">*</span></label>
                                                   <textarea name="course_short_desc" contenteditable="true">
                                                      <?=(!empty($datalist['course_short_desc'])?$datalist['course_short_desc']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('course_short_desc');
                                                       
                                                   </script>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Desciprition<span class="text-danger">*</span></label>
                                                   <textarea name="course_description" contenteditable="true">
                                                     <?=(!empty($datalist['course_description'])?$datalist['course_description']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('course_description');
                                                       
                                                   </script>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Status Active/Inactive  </label>
                                                            <select class="form-control" name="course_status">
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