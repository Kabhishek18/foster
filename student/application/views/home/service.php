	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Services</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Services</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- About Text Content -->
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_content">
						<h3>What We Do</h3>
						<p class="color-black22 mt20">Driven by his passion for learning & development, Ankur, a methodical Human Resource professional founded Foster Bright Learning in 2017, which soon transformed as the leading learning hub and one of the best sources for achieving greater success in exams for overseas education & immigration. </p>
						<p class="mt15">Aspirants look up to Foster Bright to learn and improve, gain meaningful exposure to compete in international entrance exams, and find their way to several developed countries to study or to work and live.</p>
						<p class="mt20">Another significant aspect at Foster Bright is our expertise in test preparation techniques, excellent study material drafted by experienced professionals, and above all our passion for training.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_thumb">
						<img class="img-fluid" src="<?=base_url()?>foster/images/about/8.jpg" alt="8.jpg">
					</div>
				</div>
			</div>
			<div class="row mb60">
				<div class="col-lg-12 text-center mt60">
					<h3 class="fz26">STUDY ABROAD PROGRAM</h3>
				<p>Our experienced counselors will assist you in identifying & selecting eminent universities across the globe, most suitable for you from all perspectives.</p>

				</div>
			</div>
			<div class="row">
		
				<div class="col-lg-6">
					<div class="about_whoweare">
						<h4>STUDYING ABROAD GIVES YOU AN OPPORTUNITY</h4>
						    
							<ul style="list-style: square;">
								<li>to explore a new culture</li> 
								<li>build a network of friends and acquaintances from around the world</li> 
								<li>experience a different yet engaging education style</li> 
								<li>showcase your abroad academic experience to future employers </li> 
							</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_whoweare">
						<h4>WHAT’S IN IT FOR YOU ?</h4>
							<ul style="list-style: square;">
								<li>Focused training to secure higher band/score in the entrance exam (IELTS/PTE and many more)</li>
								<li>Our onshore presence in Canada and Australia ensures faster turnaround </li>
								<li>Application form filling </li>
								<li>SOP (Statement of Purpose) & LOR (Letter of Recommendation) preparation</li>
								<li>Comprehensive CV preparation</li>
								<li> Visa and travel assistance</li>
							</ul>	

					</div>
				</div>

				<div class="row mb60">
				<div class="col-lg-12 mt60">
					<h3 class="fz26">IMMIGRATION ASSISTANCE</h3>
			<!--  -->
						
						<div class="col-lg-12 form_grid">
									<p>Need Immigration Assitance.Please mail your Query</p>
									<?php if($this->session->flashdata('error')){
										    echo '<p style="color:red">';
										    echo $this->session->flashdata('error'); 
					                		echo "</p>";
					                    } ?>
					                        <?php if($this->session->flashdata('success')){ 
										    echo '<p style="color:#5800ff">';
					                        echo $this->session->flashdata('success'); 
					                        echo "</p>";
					                    } ?>
					            <form class="contact_form" id="contact_form" action="<?=base_url()?>home/contact_form" method="post" >
									<div class="row">
						                <div class="col-sm-12">
						                    <div class="form-group">
						                    	<label for="exampleInputName">Full Name</label>
												<input id="form_name" name="form_name" class="form-control" required="required" type="text">
											</div>
						                </div>
						                <div class="col-sm-12">
						                    <div class="form-group">
						                    	<label for="exampleInputEmail">Your Email</label>
						                    	<input id="form_email" name="form_email" class="form-control required email" required="required" type="email">
						                    </div>
						                </div>
						                <div class="col-sm-12">
						                    <div class="form-group">
						                    	<label for="exampleInputSubject">Subject</label>
							                    <input id="form_subject" name="form_subject" class="form-control required" required="required" type="text">
											</div>
						                </div>
						                <div class="col-sm-12">
				                            <div class="form-group">
				                            	<label for="exampleInputEmail1">Your Message</label>
				                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required"></textarea>
				                            </div>
						                    <div class="form-group ui_kit_button mb0">
							                    <button type="submit" class="btn dbxshad btn-lg btn-thm white">Send Email</button>
						                    </div>
						                </div>
					                </div>
					            </form>
							</div>
			
											<!--  -->
				</div>



			</div>
		

				<div class="row mb60">
				<div class="col-lg-12 text-center mt60">
					<h3 class="fz26">LEARNING CENTERS SETUP</h3>
				<p>Are you running a coaching center but lack the presence of a professional coach who can help prepare your students for overseas entrance exams?   We have a solution!</p>
				<p>The most important feature of a successful learning center is the staff it hires & the study materials that are handed over to students/participants. You have to be on your guard while hiring staff for your setup. Competent staff, considering the need of the students and the subjects you are covering, needs to be hired. Your students will judge you from the quality and approach of the training and study material you provide them. This instills faith in the student community who comes over to you for succeeding in exams such as IELTS, PTE, TOEFL, GMAT, etc.</p>
				<p>We provide you with dedicated and experienced trainers to add to your faculty who connect online and deliver lectures to students who are there at your center. </p>

				</div>
			</div>
		
		</div>
	</section>

	<!-- Divider -->
	<section class="divider parallax bg-img2" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="divider-one">
						<p class="color-white">STARTING ONLINE LEARNING</p>
						<h1 class="color-white text-uppercase">If you have any questions or comments, please don't hesitate to contact us.</h1>
						<a class="btn btn-transparent divider-btn" href="<?=base_url()?>">Explore Our Courses</a>
					</div>
				</div>
			</div>
		</div>
	</section>

