<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.ico">

	<title>REGISTER Page</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="../page/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../page/assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="../page/assets/css/demo.css" rel="stylesheet" />
</head>

<body>
	<nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
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

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
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
				<li><button onclick="window.location='signin_form.php'" class="btn btn-round btn-login">Sign in</button></li>
        		</ul>
        	</div>
    	</div>
    </nav>
	<div class="image-container set-full-height" style="background-image: url('../assets/img/bg/register.jpg')">

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizardProfile">
		                    <form action="register.php" method="POST" enctype="multipart/form-data">
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   Build Your Profile
		                        	</h3>
									<h5>This information will let us know more about you.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">About</a></li>
			                            <li><a href="#account" data-toggle="tab">Account</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                              <div class="row">
		                                	<h4 class="info-text"> Let's start with the basic information</h4>
		                                	<div class="col-sm-4 col-sm-offset-1">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                        				<img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
		                                            	<input type="file" id="wizard-picture" name="profile_pic">
		                                        	</div>
		                                        	<h6>Choose Picture</h6>
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-6">
												<div class="form-group label-floating">
			                                         <label class="control-label">First Name <small>(required)</small></label>
			                                         <input name="firstname" type="text" class="form-control">
			                                    </div>
												<div class="form-group label-floating">
													 <label class="control-label">Last Name <small>(required)</small></label>
													 <input name="lastname" type="text" class="form-control">
												</div>
												<div class="form-group label-floating">
		                                            <label class="control-label">Age</label>
	                                            	<select name="age" class="form-control" required>
	                                            		<option disabled="" selected=""></option>
														<option value="น้อยกว่า 15 ปี"> น้อยกว่า 15 ปี </option>
	                                                	<option value="15-19 ปี"> 15-19 ปี </option>
	                                                	<option value="20-24 ปี"> 20-24 ปี </option>
	                                                	<option value="25-29 ปี"> 25-29 ปี </option>
	                                                	<option value="30-34 ปี"> 30-34 ปี </option>
	                                                	<option value="35-39 ปี"> 35-39 ปี </option>
	                                                	<option value="40-44 ปี"> 40-44 ปี </option>
	                                                	<option value="45-49 ปี"> 45-49 ปี </option>
	                                                	<option value="50-54 ปี"> 50-54 ปี </option>
	                                                	<option value="55-59 ปี"> 55-59 ปี </option>
	                                                	<option value="60-64 ปี"> 60-64 ปี </option>
	                                                	<option value="65-69 ปี"> 65-69 ปี </option>
	                                                	<option value="70-74 ปี"> 70-74 ปี </option>
	                                                	<option value="75-99 ปี"> 75-99 ปี </option>
	                                                	<option value="มากกว่า 80 ปี"> มากกว่า 80 ปี </option>
	                                            	</select>
		                                        </div>
											<div class="form-group label-floating">
											<div class="form-group" align="left">
													<label>Gender</label>
													<div class="radio">
													<label>
														<input type="radio" name="gender" id="female" value="F" checked>Female
													</label>
													</div>
												<div class="radio">
													<label>
														<input type="radio" name="gender" id="male" value="M">Male
													</label>
												</div>
											</div>
		                                	</div>
		                                </div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="account">
		                                <h4 class="info-text"> Create your Account </h4>
		                                <div class="row">
										<div class="col-sm-1">
										</div>
		                                    <div class="col-sm-10">
												<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">face</i>
														</span>
														<input type="text" class="form-control" name="username" placeholder="Username" required="required">
												</div>
												<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">lock</i>
														</span>
														<input type="password" class="form-control" name="password" placeholder="Password" required="required">
												</div>
												<div class="input-group">
														<span class="input-group-addon">
															<i class="material-icons">repeat</i>
														</span>
														<input type="password" class="form-control" name="reppassword" placeholder="Repeat Password" required="required">
												</div>
		                                    </div>
		                                </div>
		                            </div>

		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a>
	        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
    <script src="../page/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="../page/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../page/assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="../page/assets/js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="../page/assets/js/jquery.validate.min.js"></script>

</html>
