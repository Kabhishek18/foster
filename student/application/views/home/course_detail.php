
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb csv3">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb_content">
						<div class="cs_row_one csv3">
							<div class="cs_ins_container">
								<div class="cs_instructor">
									<ul class="cs_instrct_list float-left mb0">
										<li class="list-inline-item"><a class="color-white" href="#"><?=$course_type?></a></li>
										<li class="list-inline-item"><a class="color-white" href="#">Last updated <?=date('F,d y',strtotime($course_modified))?></a></li>
									</ul>
								</div>
								<h1 class=" color-white"><?=$course_name?></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Team Members -->
	<section class="our-team pb40">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9">
					<div class="row">
						<div class="col-lg-12">
							<div class="courses_single_container">
							
								<div class="cs_row_one">
									<div class="cs_overview b0p0">
										<h4 class="title">Overview</h4>
										<h4 class="subtitle">Course Information</h4>
										<p class="mb0">
											<?=$course_information?>
										</p>
									</div>
								</div>
								<div class="cs_row_one">
									<div class="cs_overview b0p0">
										<h4 class="title">Overview</h4>
										<h4 class="subtitle">Course Description</h4>
										<p class="mb0">
											<?=$course_description?>
										</p>
									</div>
								</div>
					
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-lg-4 col-xl-3">
					<div class="instructor_pricing_widget">
						<div class="price"><span>Price</span> ₹<?=$sale_price?>
						 <?=(!empty($regular_price)?'<small>₹'.$regular_price.'</small>':'')?>
						</div>
						<div  class="price">
							<form method="post" action="<?=base_url()?>enroll">
								<input type="hidden" name="course_id" value="<?=(!empty($course_id)?$course_id:'')?>">
								<input type="submit" name="submit" class="btn dbxshad btn-lg btn-thm3 rounded" value="Enroll Now">
							</form>
						</div>	
						<br>
						<hr>
											</div>
				
					<div class="selected_filter_widget p30 bgc-thm">
						<span class="float-left"><img class="mr20" src="<?=base_url()?>foster/images/resource/3.png" alt="3.png"></span>
						<h4 class="mt15 fz20 fw500 color-white">If Not sure?</h4>
						<br>
						<p class="color-white">Every course comes with a 7-day money-back guarantee</p>
					</div>
				</div>
			</div>
		</div>
	</section>
