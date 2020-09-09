
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord pb50">
		<div class="container-fluid">
				<?php require('include/menu.php')?>
					<div class="row">
						<div class="col-lg-12">
							<nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
								<h4 class="title float-left">FreeZone</h4>
								<ol class="breadcrumb float-right">
							    	<li class="breadcrumb-item"><a href="#">Home</a></li>
							    	<li class="breadcrumb-item active" aria-current="page">FreeZone</li>
								</ol>
							</nav>
						</div>
						<div class="col-lg-6">
							<h5 class="title"> Reading</h5>
								<ul style="list-style-type: square;">
			  				     <?php
									$map = directory_map('../admin/uploads/reading');
									foreach ($map as $key) {?>

                                                <li>
                                                	<div class="media-body">
                                                    <p class="mb-0"><?=$key?></p>
                                                   	<a href="../admin/uploads/reading/<?=$key?>" style="color: green" target="_top" >View</a>	
                                                       <a href="../admin/uploads/reading/<?=$key?>" style="color: blue" download>Download</a>
                                                    </div>
                                                </li>
                                         	<?php }	?>
										</ul>
						</div>
						
						<div class="col-lg-6">
							<h5 class="title"> Writing</h5>
							<ul style="list-style-type: square;">
			  				     <?php
									$map = directory_map('../admin/uploads/writing');
									foreach ($map as $key) {?>

                                                <li>
                                                	<div class="media-body">
                                                    <p class="mb-0"><?=$key?></p>
                                                   	<a href="../admin/uploads/writing/<?=$key?>" style="color: green" target="_top" >View</a>	
                                                       <a href="../admin/uploads/writing/<?=$key?>" style="color: blue" download>Download</a>
                                                    </div>
                                                </li>
                                         	<?php }	?>
										</ul>
						</div>
						<div class="col-lg-6">
							<h5 class="title"> Speaking</h5>
							<ul style="list-style-type: square;">
			  				     <?php
									$map = directory_map('../admin/uploads/speaking');
									foreach ($map as $key) {?>

                                                <li>
                                                	<div class="media-body">
                                                    <p class="mb-0"><?=$key?></p>
                                                   	<a href="../admin/uploads/speaking/<?=$key?>" style="color: green" target="_top" >View</a>	
                                                       <a href="../admin/uploads/speaking/<?=$key?>" style="color: blue" download>Download</a>
                                                    </div>
                                                </li>
                                         	<?php }	?>
										</ul>
						</div>
						<div class="col-lg-6">
							<h5 class="title"> Listening</h5>
								<ul style="list-style-type: square;">
			  				     <?php
									$map = directory_map('../admin/uploads/speaking');
									foreach ($map as $key) {?>

                                                <li>
                                                	<div class="media-body">
                                                    <p class="mb-0"><?=$key?></p>
                                                   	<a href="../admin/uploads/speaking/<?=$key?>" style="color: green" target="_top" >View</a>	
                                                       <a href="../admin/uploads/speaking/<?=$key?>" style="color: blue" download>Download</a>
                                                    </div>
                                                </li>
                                         	<?php }	?>
										</ul>
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

