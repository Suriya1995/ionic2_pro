<?php
	session_start();
	if(empty($_SESSION['username']))
	{
		echo "<script>";
		echo "alert(\" Please Login! \");window.location ='signin_form.php';";;
		echo "</script>";
		exit();
	}
	if($_SESSION['status'] != "U")
	{
		echo "<script>";
		echo "alert(\" Retry Login Again \");";
		echo "window.history.back()";
		echo "</script>";
		exit();
	}

	include("connect_db.php");
	$strSQL = "SELECT * FROM member WHERE username='".$_SESSION['username']."'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Personality Quiz</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
</head>
<body class="profile-page">
	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="index.php">LOGO</a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav">
					<li>
    					<a href="index.php">
    						HOME
    					</a>
    				</li>
    				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">PLACE<b class="caret"></b>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="#">BANGKOK</a></li>
							<li><a href="#">Coming soon</a></li>
							<li><a href="#">Coming soon</a></li>
						</ul>
    				</li>
		            <li>
		                <a href="about.php">
						ABOUT
						</a>
		            </li>
		            <li>
		            	<a href="contact.php">
						CONTACT
						</a>
		            </li>
        		</ul>
        		<ul class="nav navbar-nav navbar-right">
        			<li class="active">
        				<a href="profile.php">
        					<i class="material-icons">reply</i>
        					Back to Profile
        				</a>
        			</li>
        			<li class="active">
        				<a href="quiz.php">
        					<i class="material-icons">comment</i>
        					PERSONALITY QUIZ
        				</a>
        			</li>
        			<li class="active">
        				<a href="logout.php">
        					<i class="material-icons">exit_to_app</i>
        					LOGOUT
        				</a>
        			</li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('../assets/img/examples/city.jpg');"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	            	<div class="col-sm-8 col-sm-offset-2">
	            		<form role="form" name="profile_edit" method="post" action="profile_save.php" enctype="multipart/form-data">
	            			<!-- profile picture -->
							<div class="avatar-upload">
        						<div class="avatar-edit">
            					<input type='file' id="imageUpload" name="profile_pic" accept=".png, .jpg, .jpeg, .gif" />
            					<label data-toggle="tooltip" data-placement="top" title="jpg.,png.,gif only & size less than 1 Mb" for="imageUpload"><i class="material-icons" style="margin-left: 4px;margin-top: 4px">create</i></label>
        						</div>
        						<div class="avatar-preview">
            						<div id="imagePreview" style="background-image: url(../page/images/<?=$objResult["profile_pic"]; ?>);"></div>
        						</div>
    						</div>
	            			<!-- username -->
	            			<div class="form-group">
                                <b>Username</b>
                                <input class="form-control" name="username" value="<?php echo $objResult["username"]; ?>" disabled='disabled' />
								<input type="hidden" name="username" value="<?php echo $objResult["username"]; ?>" />
                    		</div>
                    		<!-- firstname -->
                    		<div class="form-group">
                                <b>Firstname</b>
                                <input class="form-control" name="firstname" type="text" id="firstname" value="<?=$objResult["firstname"]; ?>" placeholder="Firstname" required="required" />
                            </div>
                            <!-- lastname -->
                            <div class="form-group">
                                <b>Lastname</b>
                                <input class="form-control" name="lastname" type="text" id="lastname" value="<?=$objResult["lastname"]; ?>" placeholder="Lastname" required="required" />
                            </div>
                            <!-- Password -->
                            <div class="form-group">
                                <b>Password</b>
                                <input class="form-control" name="password" type="password" id="password" value="<?=$objResult["password"]; ?>" placeholder="Password" required="required" />
                            </div>
                            <!-- Repeate Password -->
							<div class="form-group">
                                <b>Repeate Password</b>
                                <input class="form-control" name="repassword" type="password" id="repassword" value="<?=$objResult["password"]; ?>" placeholder="Confirm Password" required="required" />
                            </div>
                            <!-- age -->
                            <div class="form-group">
								<b>Age</b>
	                			<select name="age" class="form-control" required>
									<option value="น้อยกว่า 15 ปี" <?php if($objResult["age"]=="น้อยกว่า 15 ปี"){ echo "selected"; }?>> น้อยกว่า 15 ปี </option>
	                   				<option value="15-19 ปี" <?php if($objResult["age"]=="15-19 ปี"){ echo "selected"; }?> > 15-19 ปี </option>
	                   				<option value="20-24 ปี" <?php if($objResult["age"]=="20-24 ปี"){ echo "selected"; }?> > 20-24 ปี </option>
	                    			<option value="25-29 ปี" <?php if($objResult["age"]=="25-29 ปี"){ echo "selected"; }?> > 25-29 ปี </option>
	                   				<option value="30-34 ปี" <?php if($objResult["age"]=="30-34 ปี"){ echo "selected"; }?> > 30-34 ปี </option>
	                    			<option value="35-39 ปี" <?php if($objResult["age"]=="35-39 ปี"){ echo "selected"; }?> > 35-39 ปี </option>
	                    			<option value="40-44 ปี" <?php if($objResult["age"]=="40-44 ปี"){ echo "selected"; }?> > 40-44 ปี </option>
	                    			<option value="45-49 ปี" <?php if($objResult["age"]=="45-49 ปี"){ echo "selected"; }?> > 45-49 ปี </option>
	                    			<option value="50-54 ปี" <?php if($objResult["age"]=="50-54 ปี"){ echo "selected"; }?> > 50-54 ปี </option>
	                    			<option value="55-59 ปี" <?php if($objResult["age"]=="55-59 ปี"){ echo "selected"; }?> > 55-59 ปี </option>
	                    			<option value="60-64 ปี" <?php if($objResult["age"]=="60-64 ปี"){ echo "selected"; }?> > 60-64 ปี </option>
	                    			<option value="65-69 ปี" <?php if($objResult["age"]=="65-69 ปี"){ echo "selected"; }?> > 65-69 ปี </option>
	                    			<option value="70-74 ปี" <?php if($objResult["age"]=="70-74 ปี"){ echo "selected"; }?> > 70-74 ปี </option>
	                    			<option value="75-99 ปี" <?php if($objResult["age"]=="75-99 ปี"){ echo "selected"; }?> > 75-99 ปี </option>
	                    			<option value="มากกว่า 80 ปี" <?php if($objResult["age"]=="มากกว่า 80 ปี"){ echo "selected"; }?> > มากกว่า 80 ปี </option>
	                			</select>
		    				</div>
		    				<!-- gender -->
		    				<div class="form-group" required="required">
							<b>Gender</b>
								<div class="radio">
									<label>
										<input type="radio" name="gender" value="F" <?php if($objResult["gender"]=="F"){ echo "checked"; }?>> Female 
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="gender" value="M" <?php if($objResult["gender"]=="M"){ echo "checked"; }?>>Male 
									</label>
								</div>
							</div>
							<!-- submit button -->
                    		<input type="submit" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 80px" name="edit_admin" id="edit_admin" value="Save">
						</form>
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
                &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
            </div>
        </div>
    </footer>


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
	<!--==================================== sorry I am a newbie in bootsnipp so I am unable to link js to html in bootsnipp thats why I have included the script in html ===================-->

</html>
