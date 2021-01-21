<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact Us | SN Integrity</title>
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<!-- Recaptcha -->
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		
		
		<!-- ZENDESK CUENTA PRUEBA ESPAÑOL -->
		<!-- Start of  Zendesk Widget script -->
		<!--
		<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=dd128329-a0ef-4bd1-9998-7f7d99734301"> </script>
		-->
		<!-- End of  Zendesk Widget script -->
		
		<!--NEW ZENDESK ACCOUNT ENGLISH -->
		<!-- Start of  Zendesk Widget script -->
		<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=48c81bcb-323b-488d-9b2f-30abe1cf2884"> </script>
		<!-- End of  Zendesk Widget script -->
		
		<!--
		<script type="text/javascript">$zopim(function() {
			$zopim.livechat.setLanguage('en');
		});</script>
		-->
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171604650-2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'UA-171604650-2');
		</script>
		
		
		<script>
			function loadScript(a){
				var b=document.getElementsByTagName("head")[0],c=document.createElement("script");
				c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)
				}loadScript(function(){beTracker.t({hash:"83c41943eedc891ed41c6598948eb0a"})});
		</script>
		
		
	</head>
	<body>
		<div class="main-page-wrapper">
			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader">
					<span>I</span>
					<span>N</span>
					<span>T</span>
					<span>E</span>
					<span>G</span>
					<span>R</span>
					<span>I</span>
					<span>T</span>
					<span>Y</span>
					<div class="covers">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
			<!--
			=============================================
				Theme Header
			==============================================-->
			<?php require_once "header.php" ?>
			<!--=============================================Theme Inner Banner==============================================-->
			<div class="inner-banner" style="background:url(images/inner-page/contact-us.jpg) no-repeat center;background-size:cover;">
				<div class="opacity">
					<div class="container">
						<div class="theme-title">
							<h3>Contact us</h3>
							<p>Welcome to SN Integrity</p>
							<ul>
								<li><a href="index.php" class="tran3s">Home</a></li>
								<li><a href="#" class="tran3s">Page</a></li>
								<li>Contact</li>
							</ul>
						</div>
						<!-- /.theme-title -->
					</div>
					<!-- /.container -->
				</div>
				<!-- /.opacity -->
			</div>
			<!-- /.inner-banner -->
			<!--
			=============================================
				Contact US
			==============================================
			-->
			<div class="contact-us-page">
				<div class="container">
					<div class="contact-wrapper">
						<!-- Contact Form -->
						<div class="contact-form-holder">
							<h4>Contact US</h4>
							<p>Ask us a question by completing our online form below. One of our team of experts will respond within 24 hours – We Promise.</p>
							<div class="row">
								<form action="mail.php" class="form-validation" autocomplete="off" id="contact">
									<div class="col-sm-6 col-xs-12">
										<div class="single-input-group">
											<input type="text" placeholder="YOUR NAME" class="form-control" name="name">
										</div>
										<!-- /.single-input-group -->
									</div>
									<!-- /.col- -->
									<div class="col-sm-6 col-xs-12">
										<div class="single-input-group">
											<input type="email" placeholder="YOUR EMAIL" class="form-control" name="email">
										</div>
										<!-- /.single-input-group -->
									</div>
									<!-- /.col- -->
									<div class="col-xs-12">
										<div class="single-input-group">
											<input type="text" placeholder="SUBJECT" class="form-control" name="sub">
										</div>
										<!-- /.single-input-group -->
									</div>
									<!-- /.col- -->
									<div class="col-xs-12">
										<textarea placeholder="MESSAGE" class="form-control" name="message"></textarea>
										
										<!--
										<div class="single-input-group" >
											<div class="g-recaptcha" data-sitekey="6Lfkc4gUAAAAADPoZguTc2TetHcf1Z9WzN0ryDhA"></div>
										</div>
										-->
										
										<button type="submit" class="tran3s hvr-rectangle-in send" style="margin-top:10px">send message</button>
									</div>
									<!-- /.col- -->
									<input type="hidden" name="enquiry" value="kjsdh">
								</form>
							</div>
							<!-- /.row -->
							<!-- Contact Form Validation Markup -->
							<!-- Contact alert -->
							<div class="alert-wrapper" id="alert-success">
								<div id="success">
									<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
									<div class="wrapper">
										<p>Your message was sent successfully.</p>
									</div>
								</div>
							</div>
							<!-- End of .alert_wrapper -->
							<div class="alert-wrapper" id="alert-error">
								<div id="error">
									<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
									<div class="wrapper">
										<p>Sorry!Something Went Wrong.</p>
									</div>
								</div>
							</div>
							<!-- End of .alert_wrapper -->
						</div>
						<!-- /.contact-form-holder -->
						<div class="contact-address">
							<h4>CONTACT US</h4>
							<p>Welcome to SN Integrity, call us Monday to Friday from 7:30 am to 6:00 p.m. SA time.</p>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single-box tran3s">
										<div class="icon round-border"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
										<a href="#">nestor@snintegrity.com.au</a>
									</div>
									<!--  /.single-box -->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="single-box tran3s">
										<div class="icon round-border"><i class="fa fa-phone" aria-hidden="true"></i></div>
										<a href="#">08 7220 6670</a>
										<a href="#">0430 041 643</a>
									</div>
									<!--  /.single-box -->
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="single-box tran3s">
										<div class="icon round-border"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<p>35 Wisteria Grove Felixstow SA 5070 Australia</p>
									</div>
									<!--  /.single-box -->
								</div>
							</div>
						</div>
					</div>
					<!-- /.contact-wrapper -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.contact-us-page -->
			<!--
			=============================================
				Footer
			==============================================
			-->
			<?php require_once "footer.php" ?>
			<!-- Scroll Top Button -->
			<!--
			<button class="scroll-top tran3s hvr-shutter-out-horizontal">
			<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			-->
			<!-- Js File_________________________________ -->
			<!-- j Query -->
			<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>
			<!-- Bootstrap JS -->
			<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
			<!-- Bootstrap Select JS -->
			<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>
			<!-- Vendor js _________ -->
			<!-- revolution -->
			<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
			<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
			<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
			<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
			<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
			<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
			<!-- menu  -->
			<script type="text/javascript" src="vendor/menu/src/js/jquery.slimmenu.js"></script>
			<script type="text/javascript" src="vendor/jquery.easing.1.3.js"></script>
			<!-- fancy box -->
			<script type="text/javascript" src="vendor/fancy-box/jquery.fancybox.pack.js"></script>
			<!-- owl.carousel -->
			<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
			<!-- Time picker -->
			<script type="text/javascript" src="vendor/time-picker/jquery.timepicker.min.js"></script>
			<!-- Validation -->
			<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
			<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
			<!-- Theme js -->
			<script type="text/javascript" src="js/theme.js"></script>
			
			
			
		</div>
		<!-- /.main-page-wrapper -->
	</body>
</html>