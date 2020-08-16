
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="container">
					
						<center>
							<h1>
								<?php if($this->session->flashdata('error')){ ?>
		                        <?php echo $this->session->flashdata('error'); } ?>
		                        <?php if($this->session->flashdata('success')){ ?>
		                        <?php echo $this->session->flashdata('success'); } ?>	
							</h1>
							
						</center>
					
				</div>
			</div>
		</div>
	</section>

