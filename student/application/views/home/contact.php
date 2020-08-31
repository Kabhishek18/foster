	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Contact Us</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- How It's Work -->
	<section class="our-contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-placeholder-1"></span></div>
						<h4>Our Location</h4>
						<p>Collin Street West, Victor 8007, Australia.</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-phone-call"></span></div>
						<h4>Our Location</h4>
						<p class="mb0">Mobile: (+096) 468 235 <br> Fax: (+096) 468 235</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-email"></span></div>
						<h4>Write Some Words</h4>
						<p>Info@edumy.com</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="h600" id="map-canvas">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218.97313774580186!2d77.31429943697678!3d28.58266619255321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce45ec665afaf%3A0x74f2e49704a4a7ce!2sCONNECTIER%20OUTSOURCING%20SERVICES%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1598530025482!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
				<div class="col-lg-6 form_grid">
					<h4 class="mb5">Send a Message</h4>
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
			</div>
		</div>
	</section>