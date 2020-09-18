	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Freezone</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Freezone</li>
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
							<h2 class="title"> Reading</h2>
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
							<h2 class="title"> Writing</h2>
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
							<h2 class="title"> Speaking</h2>
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
							<h2 class="title"> Listening</h2>
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
			
				</div>
			</div>
		</div>
	</section>

