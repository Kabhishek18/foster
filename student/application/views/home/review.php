<style type="text/css">
	.star-rating {
	   display:flex;
	  flex-direction: row-reverse;
	  font-size:1.5em;
	  justify-content:space-around;
	  padding:0 .2em;
	  text-align:center;
	  width:5em;
	}

	.star-rating input {
	  display:none;
	}

	.star-rating label {
	  color:#ccc;
	  cursor:pointer;
	}

	.star-rating :checked ~ label {
	  color:#f90;
	}

	.star-rating label:hover,
	.star-rating label:hover ~ label {
	  color:#fc0;
	}
</style>
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord pb50">
		<div class="container-fluid">
				<?php require('include/menu.php')?>
						<div class="col-lg-12">
							<nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
								<h4 class="title float-left">Review</h4>
								<ol class="breadcrumb float-right">
							    	<li class="breadcrumb-item"><a href="#">Home</a></li>
							    	<li class="breadcrumb-item active" aria-current="page">Review</li>
								</ol>
							</nav>
						</div>
						<div class="col-lg-12">
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
						</div>
						<div class="col-lg-9">
							<form class="form-group" action="<?=base_url()?>home/ReviewAdd" method="post">
							<div class="form-group">
								<label>Star Rating</label>
								
									<div class="star-rating">
									  <input type="radio" class="form-control" id="5-stars" name="rating" value="5"  />
									  <label for="5-stars"  class="star">&#9733;</label>
									  <input type="radio" class="form-control" id="4-stars" name="rating" value="4" />
									  <label for="4-stars" class="star">&#9733;</label>
									  <input type="radio" class="form-control"id="3-stars" name="rating" value="3" />
									  <label for="3-stars" class="star">&#9733;</label>
									  <input type="radio" class="form-control" id="2-stars" name="rating" value="2" />
									  <label for="2-stars" class="star">&#9733;</label>
									  <input type="radio" class="form-control" id="1-star" name="rating" value="1" checked />
									  <label for="1-star" class="star">&#9733;</label>
									</div>
							</div>		
									<div class="form-group">
										<label>Tutor Name</label>
										<?php $tutors = $this->home_model->TutorList();?>
										<select name="tutor" class="form-control" required>
											<option value="">Selected</option>
											<?php foreach($tutors as $tutor){?>
											<option value="<?=$tutor['users_id']?>"><?=$tutor['users_name']?></option>
											<?php }?>
										</select>
									</div>

									<div class="form-group">
										<label>Describe your rating </label>
										<textarea class="form-control" name="tutor_description" rows="4"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" name="submit" class="btn btn-primary">
									</div>
								</form>	
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

