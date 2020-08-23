
	<!-- Main Header Nav -->
	 <header class="header-nav menu_style_home_four navbar-scrolltofixed stricky main-menu">
	<!-- <header class="header-nav menu_style_home_four stricky main-menu" style="margin-top:0px;"> -->

		<div class="container">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="<?=base_url()?>foster/FosterBright-Header.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="<?=base_url()?>" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="<?=base_url()?>foster/FosterBright-Header.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="<?=base_url()?>foster/FosterBright-Header.png" alt="header-logo2.png">
		        </a>
				<div class="ht_left_widget home3 float-left">
				
					<ul>
						<li class="list-inline-item">
							<div class="header_top_lang_widget">
								<div class="ht-widget-container">
									<div class="vertical-wrapper">
										<h2 class="title-vertical home3" style="webkit-border-radius:0px; border-radius:0px; background:none; margin-top:5px;">
											 <i class="fa fa-bars" aria-hidden="true" style="color:white; margin-right:5px;"></i><span class="text-title"  style="color:white;"> </span>
										</h2>
										<div class="content-vertical">
											<ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">
												<li><a href="<?=base_url()?>about">About Us</a></li>
												<li>
														<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Services  <b class="caret"></b></a>
														<div class="dropdown-menu vertical-megamenu" style="width: 300px;">
															<div class="dropdown-menu-inner">
																<div class="element-inner">
																	<div class="element-section-wrap">
																		<div class="element-container">
																			<div class="element-row">
																				<div class="col-lg-7">
																					<div class="row">
																						<div class="col-lg-6">
																							<div class="element-wrapper">
																								
																								<div class="widget-nav-menu">
																									<div class="element-list-wrapper wn-menu">
																										<ul class="element-menu-list">
																											<li><a href="#">Color</a></li>
																											<li><a href="#">Digital Painting</a></li>
																											<li><a href="#">Drawing</a></li>
																											<li><a href="#">Illustration</a></li>
																										</ul>
																									</div>
																								</div>
																								
																							</div>
																						</div>
																						
																					</div>
																				</div>
																				
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
												<li><a href="#">Affiliate</a></li>
												<li><a href="#">Gallery</a></li>
												<li><a href="#">Blogs</a></li>
												<li><a href="#">CSR</a></li>

											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						
					</ul>
				</div>
      
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
				<div class="ht_left_widget home3 float-left">
				
					<ul>
						<li class="list-inline-item">
							<div class="header_top_lang_widget">
								<div class="ht-widget-container">
									<div class="vertical-wrapper">
										<h2 class="title-vertical home3" style="webkit-border-radius:0px; border-radius:3px; margin-top:7px;">
											<span class="text-title">Courses</span> <i class="fa fa-angle-down show-down" aria-hidden="true"></i>
										</h2>
										<div class="content-vertical">
											<ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">
												<?php $courses = $this->cart_model->GetCategories();
													foreach($courses as $course){?>
													<li><a href="<?=base_url()?>course/<?=$course['category_id']?>/<?=urlencode($course['category_name'])?>"><?=$course['category_name']?></a></li>
												<?php }?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						
					</ul>
				</div>
		        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
		            
					<ul class="sign_up_btn pull-right dn-smd mt20"  style="margin-top:5px;text-transform: capitalize;">
						<?php $user =$this->session->user_account;
				if(!empty($user['users_name'])){
					echo '<li> <a href="dashboard"> '.$user['users_name'].'</a>  (<a style="color:#c6d72a" href="'.base_url().'home/logout">Log out</a>)</li>' ;
					echo '<li> <a href="dashboard"> '.$user['users_email'].'</a></li>' ;}
					else{?>
	                <li class="list-inline-item" ><a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter" style="width:80px;"> <span class="dn-md">Login</span></a></li>
					 <li class="list-inline-item"><a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter"><span class="dn-md">Sign Up</span></a></li>
					<?php }?> 
	            </ul><!-- Button trigger modal -->
		            
		           
		            
		           
						
					
		           <li class="last">
		                <a href="page-contact.html"><span class="title">+91 8860756247</span></a>
		            </li>
					
					<li class="last">
		                <a href="page-contact.html"><span class="title">Train With Us</span></a>
		            </li>
					<li class="list_five">
		                <a href="#"><span class="title">Freebies</span></a></li>
					 <li class="list_two">
		                <a href="#"><span class="title">Our Results</span></a></li>
		        </ul>
		    </nav>
		    <!-- End of Responsive Menu -->
		</div>
	</header>
	
	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2">
		            <img class="nav_logo_img img-fluid float-left mt20" src="<?=base_url()?>foster/FosterBright-Header.png" alt="header-logo.png">
		            <span>Foster Bright</span>
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item">
	                	
					</li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
			<li><a href="<?=base_url()?>about">About Us</a></li>

				<li><span>Our Courses</span>
					<ul>
						<?php $courses = $this->cart_model->GetCategories();
							foreach($courses as $course){?>
	                    <li><a href="#">IELTS  General</a></li>
	                    <li><a href="#">IELTS  Academic</a></li>
	                    <li><a href="#">CELPIP</a></li>
	                    <li><a href="#">PTE</a></li>
	               		<?php }?>
					</ul>
				</li>
				<li><span>Our Serices</span>
					<ul>
	                    <li><a href="#">Study Abroad</a></li>
	                    <li><a href="#">Immigration Support</a></li>
	                    <li><a href="#">Online Coaching Centre</a></li>
					</ul>
				</li>
				<li><a href="#">Our Results</a></li>
				<li><a href="#">Freebies</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Article/Blogs</a></li>
				<li><a href="#">Career</a></li>
				<li><a href="#">Contact Us</a></li>
				<?php $user =$this->session->user_account;
				if(!empty($user['users_name'])){
					echo $user['users_email'] ;}
					else{?>
				<li style="background:white;"><a href="#" style="color:black;"><span class="flaticon-user"></span> Login</a></li>
				<li style="background:#051925;"><a href="#"><span class="flaticon-edit"></span> Register</a></li>
				<?php }?>
			</ul>
		</nav>
	</div>




<!-- Modal -->
	<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
	    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form action="<?=base_url()?>home/Authentication" method="post">
								<div class="heading">
									<h3 class="text-center">Login to your account</h3>
									<p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" name='email' id="exampleInputEmail1" placeholder="Email Address">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" name='password' id="exampleInputPassword1" placeholder="Password">
								</div>
								<div class="form-group form-check">
									<a class="tdu text-thm float-right" href="#">Forgot Password?</a>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="sign_up_form">
							<div class="heading">
								<h3 class="text-center">Create New Account</h3>
								<p class="text-center">Have an account? <a class="text-thm" href="#">Login</a></p>
							</div>
							<form action="<?=base_url()?>home/Registeration" method="post">
								<div class="form-group">
							    	<input type="text" name='username' class="form-control" id="exampleInputName1" placeholder="Username">
								</div>
								 <div class="form-group">
							    	<input type="email" name='email' class="form-control" id="exampleInputEmail2" placeholder="Email Address">
								</div>
								<div class="form-group">
							    	<input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
								</div>
								<div class="form-group">
							    	<input type="password" name="cpassword" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" name="check" class="form-check-input" id="exampleCheck2">
									<label class="form-check-label" for="exampleCheck2">Want to become an instructor?</label>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
				  	</div>
				</div>
	    	</div>
	  	</div>
	</div>


<style type="text/css">
	.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:15px;
	right:70px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
	z-index: 999;
}

.my-float{
	margin-top:22px;
}
</style>	

<!-- useless Code -->

<a href="<?=base_url()?>scheduler" class="float"> 
	<i class="fa fa-plus my-float"></i></a>

<style>
.m-progress-bar {
    min-height: 1em;
    background: #c12d2d;
    width: 5%;
}
</style>
