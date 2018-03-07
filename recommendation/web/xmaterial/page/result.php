<?php
	include('connect_db.php');
		session_start();
		$userID = $_REQUEST["userID"];
		$strSQL = "INSERT INTO form (fk_user_id,quiz1,quiz2,quiz3,quiz4,quiz5,quiz6,quiz7,quiz8,quiz9,quiz10,quiz11,quiz12,quiz13,quiz14,quiz15,quiz16,quiz17,quiz18,quiz19,quiz20,quiz21,quiz22,quiz23,quiz24,quiz25,quiz26,quiz27) VALUES ('".$_POST["userID"]."','".$_POST["radio-01"]."','".$_POST["radio-02"]."','".$_POST["radio-03"]."','".$_POST["radio-04"]."','".$_POST["radio-05"]."','".$_POST["radio-06"]."','".$_POST["radio-07"]."','".$_POST["radio-08"]."','".$_POST["radio-09"]."','".$_POST["radio-10"]."','".$_POST["radio-11"]."','".$_POST["radio-12"]."','".$_POST["radio-13"]."','".$_POST["radio-14"]."','".$_POST["radio-15"]."','".$_POST["radio-16"]."','".$_POST["radio-17"]."','".$_POST["radio-18"]."','".$_POST["radio-19"]."','".$_POST["radio-20"]."','".$_POST["radio-21"]."','".$_POST["radio-22"]."','".$_POST["radio-23"]."','".$_POST["radio-24"]."','".$_POST["radio-25"]."','".$_POST["radio-26"]."','".$_POST["radio-27"]."')";
		$objQuery = mysqli_query($conn,$strSQL);
		mysqli_close($conn);
		if ($objQuery) {
			$URL_API = "https://www.anurak.in.th/service/recommendation/admin/";
			$postdata = http_build_query(
  			array(
    			'fk_user_id' => $userID
  				)
			);

			$opts = array('http' =>
  			array(
    			'method'  => 'POST',
    			'header'  => 'Content-type: application/x-www-form-urlencoded',
    			'content' => $postdata
				)
			);

			$context  = stream_context_create($opts);

			$json = file_get_contents($URL_API.'form_data.php', false, $context);
			$obj = json_decode($json,true);
		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Error !!!');";
			echo "</script>";
		}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Result</title>

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
		            <!-- <li>
		                <a href="about.php">
						ABOUT
						</a>
		            </li> -->
		            <li>
		            	<a href="contact.php">
						CONTACT
						</a>
		            </li>
        		</ul>
        	<?php
        	if($_SESSION["status"] == 'U') {?>
        		<ul class="nav navbar-nav navbar-right">
        			<li class="active">
        				<a href="profile.php">
        					<i class="material-icons">reply</i>
        					Back to Profile
        				</a>
        			</li>
        			<li class="active">
        				<a href="profile_edit.php">
        					<i class="material-icons">account_circle</i>
        					EDIT PROFILE
        				</a>
        			</li>
        			<li class="active">
        				<a href="logout.php">
        					<i class="material-icons">exit_to_app</i>
        					LOGOUT
        				</a>
        			</li>
        		</ul>
        	<?php }
        	if ($_SESSION["status"] == 'G') {
     			
        	}?>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('../assets/img/examples/city.jpg');"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">

					<div class="row">
						<!-- <h1 style="margin-top: 30px;margin-bottom: 30px;">Result</h1> -->
						<?php 
						include ("result_place.php");
							// echo "<b>"."Personality"."</b>"."<br>";
							// foreach ($obj['personality'] as $personality) {
								
							// 	echo $personality."<br>";
							// }
							// echo "<b>"."Type"."</b>"."<br>";
							// foreach ($obj['type'] as $type) {
								
							// 	echo $type."<br>";
							// }
							// echo "<b>"."Place"."</b>"."<br>";
							// foreach ($obj['place'] as $place) {
								
							// 	echo $place."<br>";
							// }
							?>
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
