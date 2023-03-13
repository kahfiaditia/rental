<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="author" content="www.frebsite.nl" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />		
	<title>Rental Mobil Dengan Palayanan Terbaik dan Murah</title>
		 
        <!-- Custom CSS -->
	<link href="style/assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
	<link href="style/assets/css/colors.css" rel="stylesheet">
</head>
    <body class="red-skin">
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			@include('frontend.menu')
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Trips Facts Start ================================== -->
			@include('frontend.slogan')
			<!-- ============================ Trips Facts Start ================================== -->
			<!-- ============================ Featured Courses Start ================================== -->
			@include('frontend.armada')
			<!-- ============================ Featured Courses End ================================== -->
			@include('frontend.mobil')
			
			<!-- ========================== Featured Category Section =============================== -->
			@include('frontend.keunggulan')
			<!-- ========================== Featured Category Section =============================== -->
			@include('frontend.tentang')
			<!-- ========================== About Facts List Section =============================== -->

			<!-- ========================== About Facts List Section =============================== -->		
					
			<!-- ============================== Start Newsletter ================================== -->
			<section class="bg-light">
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row">
					
						<div class="col-lg-8 col-md-7">
							<div class="prc_wrap">
								
								<div class="prc_wrap_header">
									<h4 class="property_block_title">Hubungi Kami</h4>
								</div>
								
								<div class="prc_wrap-body">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control simple">
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Email</label>
												<input type="email" class="form-control simple">
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label>Subject</label>
										<input type="text" class="form-control simple">
									</div>
									
									<div class="form-group">
										<label>Message</label>
										<textarea class="form-control simple"></textarea>
									</div>
									
									<div class="form-group">
										<button class="btn btn-theme" type="submit">Submit Request</button>
									</div>
								</div>
								
							</div>
											
						</div>
						
						<div class="col-lg-4 col-md-5">
						
							<div class="prc_wrap">
								
								<div class="prc_wrap_header">
									<h4 class="property_block_title">Kontak Kami</h4>
								</div>
								
								<div class="prc_wrap-body">
									<div class="contact-info">
								
										<h2>Get In Touch</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
										
										<div class="cn-info-detail">
											<div class="cn-info-icon">
												<i class="ti-home"></i>
											</div>
											<div class="cn-info-content">
												<h4 class="cn-info-title">Reach Us</h4>
												2512, New Market,<br>Eliza Road, Sincher 80 CA,<br>Canada, USA
											</div>
										</div>

										<div class="cn-info-detail">
											<div class="cn-info-icon">
												<i class="ti-email"></i>
											</div>
											<div class="cn-info-content">
												<h4 class="cn-info-title">Email</h4>
												leoaditia@gmail.com<br>leoaditia@gmail.com
											</div>
										</div>
										
																	
										<div class="cn-info-detail">
											<div class="cn-info-icon">
												<i class="ti-mobile"></i>
											</div>
											<div class="cn-info-content">
												<h4 class="cn-info-title">Call Us</h4>
												(41) 123 521 458<br>+91 235 548 7548
											</div>
										</div>
										
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
					<!-- /row -->		
					
				</div>
						
			</section>
			<!-- ================================= End Newsletter =============================== -->
			
			<!-- ============================ Footer Start ================================== -->
			@include('frontend.footer')
			<!-- ============================ Footer End ================================== -->
			
			<!-- End Modal -->
			<a id="" class="" title="chat" href="#"><i class=""></i></a>
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			
		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="style/assets/js/jquery.min.js"></script>
		<script src="style/assets/js/popper.min.js"></script>
		<script src="style/assets/js/bootstrap.min.js"></script>
		<script src="style/assets/js/select2.min.js"></script>
		<script src="style/assets/js/slick.js"></script>
		<script src="style/assets/js/jquery.counterup.min.j"></script>
		<script src="style/assets/js/counterup.min.js"></script>
		<script src="style/assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
	</body>
</html>