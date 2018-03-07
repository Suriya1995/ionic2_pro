<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>HOME</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="../assets/css/demo.css" rel="stylesheet" />

</head>

<body class="index-page profile-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="index.php" class="navbar-brand">
				<b>LOGO</b>
	        	<!-- **LOGO + NAME PROJECT -->
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav">
				<li>
					<a href="index.php">
					 HOME
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">PLACE
					<b class="caret"></b>
					</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#">BANGKOK</a></li>
						<li><a href="#">Coming soon</a></li>
						<li><a href="#">Coming soon</a></li>
					</ul>
				</li>
				<!-- <li>
					<a href="components-documentation.html">
					 ABOUT
					</a>
				</li> -->
				<li>
					<a href="components-documentation.html">
					 CONTACT
					</a>
				</li>
	    	</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="register_form.php">Register</a></li>
                    
				<li><a href="signin_form.php" class="btn btn-round btn-login">Sign in</a></li>
			</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('../assets/img/bg/home.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h2><b>Personality and Tourists' s Behavior Recommendation System</b></h2>
						<!-- <h4>A Badass Bootstrap UI Kit based on Material Design.</h4> -->
						<a href="signin_form.php"class="btn btn-test btn-round">GO TO PERSONALITY QUIZ!<div class="ripple-container"></div></a>
					</div>
				</div>
			</div>

		</div>
	</div>
<!-- content -->
	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
	            <div class="title">
	                <h2 style="text-align: center;">Travel Recommendation</h2>
	            </div>
	            <div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="profile-tabs">
			               	<div class="nav-align-center">
								<ul class="nav nav-pills" role="tablist">
									<li class="active">
										<a href="#studio" role="tab" data-toggle="tab">
										<i class="material-icons">camera</i>
												Studio
										</a>
									</li>
									<li>
				                        <a href="#work" role="tab" data-toggle="tab">
										<i class="material-icons">palette</i>
												Work
				                        </a>
				                    </li>
				                    <li>
				                        <a href="#shows" role="tab" data-toggle="tab">
										<i class="material-icons">favorite</i>
				                                Favorite
				                        </a>
				                    </li>
				                </ul>

				            	<div class="tab-content gallery">
									<div class="tab-pane active" id="studio">
				                        <div class="row">
											<div class="col-md-6">
												<img src="../assets/img/examples/chris1.jpg" class="img-rounded" />
												<img src="../assets/img/examples/chris0.jpg" class="img-rounded" />
											</div>
											<div class="col-md-6">
												<img src="../assets/img/examples/chris3.jpg" class="img-rounded" />
												<img src="../assets/img/examples/chris4.jpg" class="img-rounded" />
											</div>
				                        </div>
				                    </div>
				                    <div class="tab-pane text-center" id="work">
										<div class="row">
											<div class="col-md-6">
												<img src="../assets/img/examples/chris5.jpg" class="img-rounded" />
												<img src="../assets/img/examples/chris7.jpg" class="img-rounded" />
												<img src="../assets/img/examples/chris9.jpg" class="img-rounded" />
											</div>
											<div class="col-md-6">
												<img src="../assets/img/examples/chris6.jpg" class="img-rounded" />
												<img src="../assets/img/examples/chris8.jpg" class="img-rounded" />
											</div>
										</div>
				                    </div>
									<div class="tab-pane text-center" id="shows">
										<div class="row">
											<div class="col-md-6">
												<img src="../assets/img/examples/chris4.jpg" class="img-rounded" />
												<img src="../assets/img/examples/chris6.jpg" class="img-rounded" />
											</div>
											<div class="col-md-6">
												<img src="../assets/img/examples/chris7.jpg" class="img-rounded" />
												<img src="../assets/img/examples/chris5.jpg" class="img-rounded" />
												<img src="../assets/img/examples/chris9.jpg" class="img-rounded" />
											</div>
										</div>
				                    </div>

				                </div>
							</div>
						</div>
							<!-- End Profile Tabs -->
					</div>
	            </div>
	    	</div>
	    </div>
	</div>
	    
    <footer class="footer">
	    <div class="container">
	        <nav class="pull-left">
	            <ul>
					<li>
						<a href="http://www.creative-tim.com">
							Creative Tim
						</a>
					</li>
					<li>
						<a href="http://presentation.creative-tim.com">
						   About Us
						</a>
					</li>
					<li>
						<a href="http://blog.creative-tim.com">
						   Blog
						</a>
					</li>
					<li>
						<a href="http://www.creative-tim.com/license">
							Licenses
						</a>
					</li>
	            </ul>
	        </nav>
	        <div class="copyright pull-right">
	            &copy; 2016, made with <i class="material-icons">favorite</i> by Creative Tim for a better web.
	        </div>
	    </div>
	</footer>
</div>

</body>
	<!--   Core JS Files   -->
	<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="../assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>
