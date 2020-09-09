


	

	<!-- Our Footer Middle Area -->
	<div class="container-fluid footer" style="background:"<?=base_url()?>foster/images/Footer-Bg.jpg;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="footer-box">
					<h4><img src="<?=base_url()?>foster/FosterBright-Footer.png"></h4>
					<p  style="font-family:calibri; color:black;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br><br>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					<h4 style="color:#000">FOLLOW US</h4>
					<ul class="social-network social-circle">
					<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					</ul>			
					</div>
				</div>

				<div class="col-sm-1">
				</div>


				<div class="col-sm-7" style="text-align:left;">
					<h5 style="line-height:1.5; color:white;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br><br></h5>
					<div class="row">
						<div class="col-sm-6">
							<h4 style="color:white;">COMPANY</h4>
							<p style="margin-top:18px; font-family:calibri;">FAQ</p>
							<p style="font-family:calibri;">BLOG</p>
							<p style="font-family:calibri;">PRODUCT</p>
							<p style="font-family:calibri;">CONTACT US</p>
							<p style="font-family:calibri;">BULK ORDER</p>
							<p style="font-family:calibri;">STORES LOCATION</p>
							<p style="font-family:calibri;">PRIVACY POLICY</p>
							<p style="font-family:calibri;">TERMS & CONDITIONS</p>
						</div>
						<div class="col-sm-6">
							<h4 style="color:white;">USEFUL LINKS</h4>
							<p style="margin-top:18px;  font-family:calibri;">FAQ</p>
							<p style="font-family:calibri;">BLOG</p>
							<p style="font-family:calibri;">PRODUCT</p>
							<p style="font-family:calibri;">CONTACT US</p>
							<p style="font-family:calibri;">BULK ORDER</p>
							<p style="font-family:calibri;">STORES LOCATION</p>
							<p style="font-family:calibri;">PRIVACY POLICY</p>
							<p style="font-family:calibri;">TERMS & CONDITIONS</p>
						</div>
					</div>
					<hr>
				</div>
			</div>
		</div>
	</div>

	<!-- Our Footer Bottom Area -->
	<section class="footer_bottom_area home3 pt30 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="copyright-widget text-center">
						<p style="color:#0d2834;">Copyright Foster Bright Learning © 2020. All Rights Reserved. | Design & Developed By - TechCentrica</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<a class="scrollToHome home3" href="#"><i class="flaticon-up-arrow-1"></i></a>


</div>
<!-- Wrapper End -->
<script type="text/javascript" src="<?=base_url()?>foster/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/popper.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/isotop.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/snackbar.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/simplebar.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/parallax.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/scrollto.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/jquery.counterup.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/wow.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/progressbar.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/slider.js"></script>
<script type="text/javascript" src="<?=base_url()?>foster/js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="<?=base_url()?>foster/js/script.js"></script>

<script src="<?=base_url()?>foster/js/moment.min.js"></script>
<script src="<?=base_url()?>foster/js/daterangepicker.js"></script>


<!-- custom -->
<!-- <script src="<?=base_url()?>foster/js/multi-step-modal.js"></script>
<script>
sendEvent = function(sel, step) {	
    var sel_event = new CustomEvent('next.m.' + step, {detail: {step: step}});
    window.dispatchEvent(sel_event);
}
</script> -->
<script type="text/javascript">
	$('.next').click(function(){

  var nextId = $(this).parents('.tab-pane').next().attr("id");
  $('[href=#'+nextId+']').tab('show');
  return false;
  
})

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  
  //update progress
  var step = $(e.target).data('step');
  var percent = (parseInt(step) / 5) * 100;
  
  $('.progress-bar').css({width: percent + '%'});
  $('.progress-bar').text("Step " + step + " of 5");
  
  //e.relatedTarget // previous tab
  
})

$('.first').click(function(){

  $('#myWizard a:first').tab('show')

})
</script>
<script>
  $(document).on('ready', function () {
    // initialization of daterangepicker
    $('.js-daterangepicker').daterangepicker();
  });
</script>
<!-- custom -->
</body>
</html>
<!-- <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<script type="text/javascript">Calendly.initBadgeWidget({ url: 'https://calendly.com/fosterbright/free-trial', text: 'Book free trial here', color: '#1856f7', textColor: '#ffffff', branding: false });</script> -->