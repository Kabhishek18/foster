
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
							<a class="btn btn-large btn-warning" href="<?=base_url()?>home/ResendEmailVerification" > Click Here Resend Verfication Mail</a>
						</center>
					
				</div>
			</div>
		</div>
	</section>

