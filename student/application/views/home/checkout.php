
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Checkout</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Shop Checkouts Content -->
	<section class="shop-checkouts">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-8">
					<div class="checkout_form">
						<!-- <div class="heading text-center">
							<p>Have a coupon? <span class="text-thm6">Click here to enter your code</span></p>
						</div> -->
						<div class="checkout_coupon ui_kit_button">
							<!-- <form class="form-inline form1">
						    	<input class="form-control mr-sm-4" type="search" placeholder="Coupon Code" aria-label="Search">
						    	<button type="button" class="btn">Apply Coupon</button>
						    </form> -->
						    <h4 class="mb15">Billing Details</h4>
				            <form class="form2" id="coupon_form" name="contact_form" action="#" method="post" novalidate="novalidate">
								<div class="row">
					                <div class="col-sm-6">
					                    <div class="form-group">
					                    	<label for="exampleInputName">First name *</label>
											<input id="form_name" name="form_name" class="form-control" required="required" type="text">
										</div>
					                </div>
					                <div class="col-sm-6">
					                    <div class="form-group">
					                    	<label for="exampleInputName2">Last name *</label>
											<input id="form_name2" name="form_name2" class="form-control" required="required" type="text">
										</div>
					                </div>
					                <div class="col-sm-12">
					                    <div class="form-group">
					                    	<label for="exampleInputName3">Company name (optional)</label>
											<input id="form_name3" name="form_name3" class="form-control" required="required" type="text">
										</div>
					                </div>
								    <div class="col-lg-12">
										<div class="my_profile_select_box form-group">
									    	<label for="exampleFormControlInput9">Country *</label><br>
									    	<select class="selectpicker">
												
												<option>India</option>
												<option>Turkey</option>
												<option>United Kingdom</option>
												<option>United State</option>
												<option>Ukraine</option>
												<option>Uruguay</option>
												<option>UK</option>
												<option>Uzbekistan</option>
											</select>
										</div>
									</div>
					                <div class="col-sm-12">
					                    <div class="form-group">
					                    	<label for="exampleInputName3">Street address *</label>
											<input id="form_name4" name="form_name4" class="form-control mb10" placeholder="House number and street name" required="required" type="text">
											<input id="form_name5" name="form_name5" class="form-control" placeholder="Apartment, suite, unit etc. (optional)" required="required" type="text">
										</div>
					                </div>
					                <div class="col-sm-6">
					                    <div class="form-group">
					                    	<label for="exampleInputName4">Postcode / ZIP *</label>
											<input id="form_name6" name="form_name6" class="form-control" required="required" type="number">
										</div>
					                </div>
					                <div class="col-sm-6">
					                    <div class="form-group">
					                    	<label for="exampleInputName5">Town / City *</label>
											<input id="form_name7" name="form_name7" class="form-control" required="required" type="text">
										</div>
					                </div>
					                <div class="col-sm-6">
					                    <div class="form-group">
					                    	<label for="exampleInputProvince">Province *</label>
											<input id="form_name8" name="form_name8" class="form-control" required="required" type="text">
										</div>
					                </div>
					                <div class="col-sm-6">
					                    <div class="form-group">
					                    	<label for="exampleInputPhone">Phone *</label>
											<input id="form_phone" name="form_phone" class="form-control" required="required" type="number">
										</div>
					                </div>
					                <div class="col-sm-12">
					                    <div class="form-group">
					                    	<label for="exampleInputEmail">Your Email</label>
					                    	<input id="form_email" name="form_email" class="form-control required email" required="required" type="email">
					                    </div>
					                </div>
					                <div class="col-sm-12">
			                            <div class="form-group mb0">
			                            	<label class="ai_title" for="exampleInputTextArea">Additional Information</label>
			                            	<p>Order notes (optional)</p>
			                                <textarea id="form_message" name="form_message" class="form-control required" rows="7" placeholder="Notes about your order, e.g. special notes for delivery." required="required"></textarea>
			                            </div>
					                </div>
				                </div>
				            </form>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-4">
					<div class="order_sidebar_widget mb30">
						<h4 class="title">Your Order</h4>
						<ul>
							<?php $pro = $this->session->enroll; ?>
							<li class="subtitle"><p>Product <span class="float-right">Total</span></p></li>
							<li><p><?=$pro['course_name']?> × 1 <span class="float-right">  ₹ <?=$pro['sale_price']?></span></p></li>
							<li class="subtitle"><p>Subtotal <span class="float-right">Subtotal</span></p></li>
							<li class="subtitle"><p>Total <span class="float-right totals color-orose"> ₹ <?=$pro['sale_price']?></span></p></li>
						</ul>
					</div>
					<div class="payment_widget">
						<div class="ui_kit_checkbox style2">							
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customCheck84" checked="">
								<label class="custom-control-label" for="customCheck84">PayPal <img class="pr15" src="<?=base_url()?>foster/images/resource/payment.png" alt="payment.png"></label>
							</div>
						</div>
					</div>
					<div class="ui_kit_button payment_widget_btn">
						<button type="button" class="btn dbxshad btn-lg btn-thm3 circle btn-block">Place Order</button>
					</div>
				</div>
			</div>
		</div>
	</section>