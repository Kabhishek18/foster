<style type="text/css">
	.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}

</style>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord pb50">
		<div class="container-fluid">
				<?php require('include/menu.php')?>
						<div class="col-lg-12">
							<nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
								<h4 class="title float-left">Free Evaluation</h4>
								<ol class="breadcrumb float-right">
							    	<li class="breadcrumb-item"><a href="#">Home</a></li>
							    	<li class="breadcrumb-item active" aria-current="page">Free Evaluation</li>
								</ol>
							</nav>
						</div>
						<div class="col-lg-12">
							<div class="default text-default" role="default">
								<div class="content">
                    				<h4>Upload Your Sample For Free Evaluation File </h4>
                    			</div>
                    		</div>
							<div class="my_course_content_container">
								 <?php if($this->session->flashdata('success')){ ?>

                    <div class="alert alert-success" role="alert">
                                            <p class="mb-0">
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </p>
                                        </div>
                                       
                         <?php }elseif($this->session->flashdata('warning')){ ?>  
                       <div class="alert alert-danger" role="alert">
                                             <p class="mb-0">
                                               <?php echo $this->session->flashdata('warning'); ?>
                                            </p>
                                        </div>
                        <?php }?> 
								<div class="my_course_content mb30">
									<div class="my_course_content_header" >
										<div class="col-md-6" style="background-color: #aa33a82b; ">
									    <?php echo form_open_multipart('home/EvalUpload','')?>
								              <div class="form-group files">
								              
								                <label>Supported Format(jpg|png|jpeg|mp4|docx|pdf)</label>
								                <input type="file" class="form-control"name="file">
								              </div>
								             <div class="form-group">
								             	<input type="submit" class="btn btn-primary" name="" value="Upload"> 
								             </div>
								             <br>
							            <?php echo form_close() ?>
									  </div>
									  <div class="col-md-6" style="margin-left: 15px" >
									  	<h4 class="title">Uploaded Sample </h4>
									  	<ul style="list-style-type: square;">
			  				     <?php
									$map = directory_map('./uploads/'.$_SESSION['user_account']['users_id'].'/sample');
									foreach ($map as $key) {?>

                                                <li>
                                                	<div class="media-body">
                                                    <p class="mb-0"><?=$key?></p>
                                                   
                                                       <a href="<?=base_url()?>Home/DeleteEval/<?=$key?>" style="color: red">Delete</a>
                                                       <a href="./uploads/<?=$_SESSION['user_account']['users_id']?>/sample/<?=$key?>" style="color: blue" download>Download</a>
                                                    </div>
                                                </li>
                                         	<?php }	?>
										</ul>
									  </div>



									</div>
									
								</div>
							</div>
						</div>
					</div>
					<div class="row mt50">
						<div class="col-lg-6 offset-lg-3">
							<div class="copyright-widget text-center">
								<p class="color-black2">Copyright Foster Bright Learning © 2020. All Rights Reserved. | Design & Developed By - TechCentrica</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

