<?php
	session_start();
	if(empty($_SESSION['ID']))
	{
		echo "<script>";
		echo "alert(\" Please Login! \");window.location ='signin_form.php';";;
		echo "</script>";
		exit();
	}
	// if($_SESSION['status'] != "U")
	// {
	// 	echo "<script>";
	// 	echo "alert(\" Retry Login Again \");";
	// 	echo "window.history.back()";
	// 	echo "</script>";
	// 	exit();
	// }

	include("connect_db.php");
	$strSQL = "SELECT * FROM member WHERE ID='".$_SESSION['ID']."'";
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
        	if($_SESSION['status']=='U') {?>
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
        	if ($_SESSION['status']=='G') {
        		# code...
        	}
        	?>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('../assets/img/examples/city.jpg');"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">

					<div class="row">
						<h4 style="margin-top: 30px;margin-bottom: 30px;">CHOOSE ONE WORD OR PHRASE PER LINE THAT BEST DESCRIBES YOU OR WHAT YOU LIKE</h4>
						<!-- choice -->
						<form role="form" name="quiz" method="post" action="result.php">
							<input type="hidden" name="userID" value="<?php echo $_SESSION["ID"]; ?>" />
							<!-- 1 -->
							<div class="col-sm-12">
							<div class="radio-box">
								1.
								<input class="radio-check" id="radio-1-1" type="radio" name="radio-01" value="red"/>
								<label for="radio-1-1">self-confident</label>

								<input class="radio-check" id="radio-1-2" type="radio" name="radio-01" value="green"/>
								<label for="radio-1-2">structured</label>

								<input class="radio-check" id="radio-1-3" type="radio" name="radio-01" value="blue"/>
								<label for="radio-1-3">sensitive</label>

								<input class="radio-check" id="radio-1-4" type="radio" name="radio-01" value="yellow"/>
								<label for="radio-1-4">trusting</label>
							</div>
							</div>
							<!-- 2 -->
							<div class="col-sm-12">
							<div class="radio-box">
								2.
								<input class="radio-check" id="radio-2-1" type="radio" name="radio-02" value="red"/>
								<label for="radio-2-1">spontaneous</label>

								<input class="radio-check" id="radio-2-2" type="radio" name="radio-02" value="yellow"/>
								<label for="radio-2-2">checks with others</label>

								<input class="radio-check" id="radio-2-3" type="radio" name="radio-02" value="blue"/>
								<label for="radio-2-3">dreamer</label>

								<input class="radio-check" id="radio-2-4" type="radio" name="radio-02" value="green"/>
								<label for="radio-2-4">analytical</label>
							</div>
							</div>
							<!-- 3 -->
							<div class="col-sm-12">
							<div class="radio-box">
								3.
								<input class="radio-check" id="radio-3-1" type="radio" name="radio-03" value="yellow"/>
								<label for="radio-3-1">likes involvement</label>

								<input class="radio-check" id="radio-3-2" type="radio" name="radio-03" value="green"/>
								<label for="radio-3-2">likes organization</label>

								<input class="radio-check" id="radio-3-3" type="radio" name="radio-03" value="red"/>
								<label for="radio-3-3">likes being straightforward</label>

								<input class="radio-check" id="radio-3-4" type="radio" name="radio-03" value="red"/>
								<label for="radio-3-4">likes to explore</label>
							</div>
							</div>
							<!-- 4 -->
							<div class="col-sm-12">
							<div class="radio-box">
								4.
								<input class="radio-check" id="radio-4-1" type="radio" name="radio-04" value="green"/>
								<label for="radio-4-1">stubborn</label>

								<input class="radio-check" id="radio-4-2" type="radio" name="radio-04" value="red"/>
								<label for="radio-4-2">dictatorial</label>

								<input class="radio-check" id="radio-4-3" type="radio" name="radio-04" value="yellow"/>
								<label for="radio-4-3">rebellious</label>

								<input class="radio-check" id="radio-4-4" type="radio" name="radio-04" value="blue"/>
								<label for="radio-4-4">easily offended</label>
							</div>
							</div>
							<!-- 5 -->
							<div class="col-sm-12">
							<div class="radio-box">
								5.
								<input class="radio-check" id="radio-5-1" type="radio" name="radio-05" value="red"/>
								<label for="radio-5-1">demanding</label>

								<input class="radio-check" id="radio-5-2" type="radio" name="radio-05" value="yellow"/>
								<label for="radio-5-2">nurturing</label>

								<input class="radio-check" id="radio-5-3" type="radio" name="radio-05" value="green"/>
								<label for="radio-5-3">persistent</label>

								<input class="radio-check" id="radio-5-4" type="radio" name="radio-05" value="blue"/>
								<label for="radio-5-4">quiet</label>
							</div>
							</div>
							<!-- 6 -->
							<div class="col-sm-12">
							<div class="radio-box">
								6.
								<input class="radio-check" id="radio-6-1" type="radio" name="radio-06" value="yellow"/>
								<label for="radio-6-1">joiner</label>

								<input class="radio-check" id="radio-6-2" type="radio" name="radio-06" value="blue"/>
								<label for="radio-6-2">likes to brainstorm</label>

								<input class="radio-check" id="radio-6-3" type="radio" name="radio-06" value="green"/>
								<label for="radio-6-3">resists change</label>

								<input class="radio-check" id="radio-6-4" type="radio" name="radio-06" value="red"/>
								<label for="radio-6-4">takes charge</label>
							</div>
							</div>
							<!-- 7 -->
							<div class="col-sm-12">
							<div class="radio-box">
								7.
								<input class="radio-check" id="radio-7-1" type="radio" name="radio-07" value="green"/>
								<label for="radio-7-1">cautious</label>

								<input class="radio-check" id="radio-7-2" type="radio" name="radio-07" value="blue"/>
								<label for="radio-7-2">overgenerous</label>

								<input class="radio-check" id="radio-7-3" type="radio" name="radio-07" value="yellow"/>
								<label for="radio-7-3">harmonious</label>

								<input class="radio-check" id="radio-7-4" type="radio" name="radio-07" value="red"/>
								<label for="radio-7-4">energetic</label>
							</div>
							</div>
							<!-- 8 -->
							<div class="col-sm-12">
							<div class="radio-box">
								8.
								<input class="radio-check" id="radio-8-1" type="radio" name="radio-08" value="yellow"/>
								<label for="radio-8-1">caring/helpful</label>

								<input class="radio-check" id="radio-8-2" type="radio" name="radio-08" value="red"/>
								<label for="radio-8-2">outspoken</label>

								<input class="radio-check" id="radio-8-3" type="radio" name="radio-08" value="green"/>
								<label for="radio-8-3">steadfast behavior</label>

								<input class="radio-check" id="radio-8-4" type="radio" name="radio-08" value="blue"/>
								<label for="radio-8-4">mild mannered</label>
							</div>
							</div>
							<!-- 9 -->
							<div class="col-sm-12">
							<div class="radio-box">
								9.
								<input class="radio-check" id="radio-9-1" type="radio" name="radio-09" value="yellow"/>
								<label for="radio-9-1">believable</label>

								<input class="radio-check" id="radio-9-2" type="radio" name="radio-09" value="red"/>
								<label for="radio-9-2">forceful</label>

								<input class="radio-check" id="radio-9-3" type="radio" name="radio-09" value="green"/>
								<label for="radio-9-3">disciplined</label>

								<input class="radio-check" id="radio-9-4" type="radio" name="radio-09" value="blue"/>
								<label for="radio-9-4">possessive</label>
							</div>
							</div>
							<!-- 10 -->
							<div class="col-sm-12">
							<div class="radio-box">
								10.
								<input class="radio-check" id="radio-10-1" type="radio" name="radio-10" value="red"/>
								<label for="radio-10-1">daring</label>

								<input class="radio-check" id="radio-10-2" type="radio" name="radio-10" value="blue"/>
								<label for="radio-10-2">idealist</label>

								<input class="radio-check" id="radio-10-3" type="radio" name="radio-10" value="green"/>
								<label for="radio-10-3">dutiful</label>

								<input class="radio-check" id="radio-10-4" type="radio" name="radio-10" value="yellow"/>
								<label for="radio-10-4">playful</label>
							</div>
							</div>
							<!-- 11 -->
							<div class="col-sm-12">
							<div class="radio-box">
								11.
								<input class="radio-check" id="radio-11-1" type="radio" name="radio-11" value="green"/>
								<label for="radio-11-1">logical</label>

								<input class="radio-check" id="radio-11-2" type="radio" name="radio-11" value="blue"/>
								<label for="radio-11-2">contented</label>

								<input class="radio-check" id="radio-11-3" type="radio" name="radio-11" value="yellow"/>
								<label for="radio-11-3">friendly</label>

								<input class="radio-check" id="radio-11-4" type="radio" name="radio-11" value="red"/>
								<label for="radio-11-4">bold/audacious</label>
							</div>
							</div>
							<!-- 12 -->
							<div class="col-sm-12">
							<div class="radio-box">
								12.
								<input class="radio-check" id="radio-12-1" type="radio" name="radio-12" value="red"/>
								<label for="radio-12-1">eager beaver</label>

								<input class="radio-check" id="radio-12-2" type="radio" name="radio-12" value="blue"/>
								<label for="radio-12-2">imaginative</label>

								<input class="radio-check" id="radio-12-3" type="radio" name="radio-12" value="green"/>
								<label for="radio-12-3">accurate/precise</label>

								<input class="radio-check" id="radio-12-4" type="radio" name="radio-12" value="yellow"/>
								<label for="radio-12-4">well liked</label>
							</div>
							</div>
							<!-- 13 -->
							<div class="col-sm-12">
							<div class="radio-box">
								13.
								<input class="radio-check" id="radio-13-1" type="radio" name="radio-13" value="green"/>
								<label for="radio-13-1">reserved</label>

								<input class="radio-check" id="radio-13-2" type="radio" name="radio-13" value="blue"/>
								<label for="radio-13-2">inventive</label>

								<input class="radio-check" id="radio-13-3" type="radio" name="radio-13" value="red"/>
								<label for="radio-13-3">charismatic</label>

								<input class="radio-check" id="radio-13-4" type="radio" name="radio-13" value="yellow"/>
								<label for="radio-13-4">optimidtic</label>
							</div>
							</div>
							<!-- 14 -->
							<div class="col-sm-12">
							<div class="radio-box">
								14.
								<input class="radio-check" id="radio-14-1" type="radio" name="radio-14" value="red"/>
								<label for="radio-14-1">authoritative</label>

								<input class="radio-check" id="radio-14-2" type="radio" name="radio-14" value="yellow"/>
								<label for="radio-14-2">team worker</label>

								<input class="radio-check" id="radio-14-3" type="radio" name="radio-14" value="blue"/>
								<label for="radio-14-3">independent</label>

								<input class="radio-check" id="radio-14-4" type="radio" name="radio-14" value="green"/>
								<label for="radio-14-4">conservative/traditional</label>
							</div>
							</div>
							<!-- 15 -->
							<div class="col-sm-12">
							<div class="radio-box">
								15.
								<input class="radio-check" id="radio-15-1" type="radio" name="radio-15" value="yellow"/>
								<label for="radio-15-1">talkative</label>

								<input class="radio-check" id="radio-15-2" type="radio" name="radio-15" value="red"/>
								<label for="radio-15-2">restless</label>

								<input class="radio-check" id="radio-15-3" type="radio" name="radio-15" value="green"/>
								<label for="radio-15-3">conscientious/attentive</label>

								<input class="radio-check" id="radio-15-4" type="radio" name="radio-15" value="blue"/>
								<label for="radio-15-4">modest/unassuming</label>
							</div>
							</div>
							<!-- 16 -->
							<div class="col-sm-12">
							<div class="radio-box">
								16.
								<input class="radio-check" id="radio-16-1" type="radio" name="radio-16" value="red"/>
								<label for="radio-16-1">leader</label>

								<input class="radio-check" id="radio-16-2" type="radio" name="radio-16" value="yellow"/>
								<label for="radio-16-2">counselor</label>

								<input class="radio-check" id="radio-16-3" type="radio" name="radio-16" value="blue"/>
								<label for="radio-16-3">designer</label>

								<input class="radio-check" id="radio-16-4" type="radio" name="radio-16" value="green"/>
								<label for="radio-16-4">controller</label>
							</div>
							</div>
							<!-- 17 -->
							<div class="col-sm-12">
							<div class="radio-box">
								17.
								<input class="radio-check" id="radio-17-1" type="radio" name="radio-17" value="green"/>
								<label for="radio-17-1">meticulous</label>

								<input class="radio-check" id="radio-17-2" type="radio" name="radio-17" value="red"/>
								<label for="radio-17-2">workaholic</label>

								<input class="radio-check" id="radio-17-3" type="radio" name="radio-17" value="yellow"/>
								<label for="radio-17-3">supportive</label>

								<input class="radio-check" id="radio-17-4" type="radio" name="radio-17" value="blue"/>
								<label for="radio-17-4">self-directed</label>
							</div>
							</div>
							<!-- 18 -->
							<div class="col-sm-12">
							<div class="radio-box">
								18.
								<input class="radio-check" id="radio-18-1" type="radio" name="radio-18" value="red"/>
								<label for="radio-18-1">industrious</label>

								<input class="radio-check" id="radio-18-2" type="radio" name="radio-18" value="green"/>
								<label for="radio-18-2">attentive to details</label>

								<input class="radio-check" id="radio-18-3" type="radio" name="radio-18" value="blue"/>
								<label for="radio-18-3">prolific mental imager</label>

								<input class="radio-check" id="radio-18-4" type="radio" name="radio-18" value="yellow"/>
								<label for="radio-18-4">prositive thinker</label>
							</div>
							</div>
							<!-- 19 -->
							<div class="col-sm-12">
							<div class="radio-box">
								19.
								<input class="radio-check" id="radio-19-1" type="radio" name="radio-19" value="green"/>
								<label for="radio-19-1">task-oriented</label>

								<input class="radio-check" id="radio-19-2" type="radio" name="radio-19" value="yellow"/>
								<label for="radio-19-2">people-oriented</label>

								<input class="radio-check" id="radio-19-3" type="radio" name="radio-19" value="blue"/>
								<label for="radio-19-3">idea-oriented</label>

								<input class="radio-check" id="radio-19-4" type="radio" name="radio-19" value="red"/>
								<label for="radio-19-4">result-oriented</label>
							</div>
							</div>
							<!-- 20 -->
							<div class="col-sm-12">
							<div class="radio-box">
								20.
								<input class="radio-check" id="radio-20-1" type="radio" name="radio-20" value="blue"/>
								<label for="radio-20-1">emotional</label>

								<input class="radio-check" id="radio-20-2" type="radio" name="radio-20" value="yellow"/>
								<label for="radio-20-2">flexible/adaptable</label>

								<input class="radio-check" id="radio-20-3" type="radio" name="radio-20" value="red"/>
								<label for="radio-20-3">likes recognition</label>

								<input class="radio-check" id="radio-20-4" type="radio" name="radio-20" value="green"/>
								<label for="radio-20-4">particular</label>
							</div>
							</div>
							<!-- 21 -->
							<div class="col-sm-12">
							<div class="radio-box">
								21.
								<input class="radio-check" id="radio-21-1" type="radio" name="radio-21" value="red"/>
								<label for="radio-21-1">irritable</label>

								<input class="radio-check" id="radio-21-2" type="radio" name="radio-21" value="green"/>
								<label for="radio-21-2">rigid</label>

								<input class="radio-check" id="radio-21-3" type="radio" name="radio-21" value="blue"/>
								<label for="radio-21-3">easily slighted</label>

								<input class="radio-check" id="radio-21-4" type="radio" name="radio-21" value="yellow"/>
								<label for="radio-21-4">easily threatened</label>
							</div>
							</div>
							<!-- 22 -->
							<div class="col-sm-12">
							<div class="radio-box">
								22.
								<input class="radio-check" id="radio-22-1" type="radio" name="radio-22" value="yellow"/>
								<label for="radio-22-1">indirect</label>

								<input class="radio-check" id="radio-22-2" type="radio" name="radio-22" value="red"/>
								<label for="radio-22-2">frank/candid</label>

								<input class="radio-check" id="radio-22-3" type="radio" name="radio-22" value="blue"/>
								<label for="radio-22-3">careful</label>

								<input class="radio-check" id="radio-22-4" type="radio" name="radio-22" value="green"/>
								<label for="radio-22-4">strict</label>
							</div>
							</div>
							<!-- 23 -->
							<div class="col-sm-12">
							<div class="radio-box">
								23.
								<input class="radio-check" id="radio-23-1" type="radio" name="radio-23" value="red"/>
								<label for="radio-23-1">goal-oriented</label>

								<input class="radio-check" id="radio-23-2" type="radio" name="radio-23" value="blue"/>
								<label for="radio-23-2">capable</label>

								<input class="radio-check" id="radio-23-3" type="radio" name="radio-23" value="yellow"/>
								<label for="radio-23-3">volunteers for tasks</label>

								<input class="radio-check" id="radio-23-4" type="radio" name="radio-23" value="green"/>
								<label for="radio-23-4">schedule-oriented</label>
							</div>
							</div>
							<!-- 24 -->
							<div class="col-sm-12">
							<div class="radio-box">
								24.
								<input class="radio-check" id="radio-24-1" type="radio" name="radio-24" value="red"/>
								<label for="radio-24-1">excels in emergencies</label>

								<input class="radio-check" id="radio-24-2" type="radio" name="radio-24" value="yellow"/>
								<label for="radio-24-2">thrives on compliments</label>

								<input class="radio-check" id="radio-24-3" type="radio" name="radio-24" value="blue"/>
								<label for="radio-24-3">dry sense of humor</label>

								<input class="radio-check" id="radio-24-4" type="radio" name="radio-24" value="green"/>
								<label for="radio-24-4">avoids causing attention</label>
							</div>
							</div>
							<!-- 25 -->
							<div class="col-sm-12">
							<div class="radio-box">
								25.
								<input class="radio-check" id="radio-25-1" type="radio" name="radio-25" value="blue"/>
								<label for="radio-25-1">enjoys watching people</label>

								<input class="radio-check" id="radio-25-2" type="radio" name="radio-25" value="red"/>
								<label for="radio-25-2">strong-willed, determined</label>

								<input class="radio-check" id="radio-25-3" type="radio" name="radio-25" value="yellow"/>
								<label for="radio-25-3">enthusiastic</label>

								<input class="radio-check" id="radio-25-4" type="radio" name="radio-25" value="green"/>
								<label for="radio-25-4">sets very high standards</label>
							</div>
							</div>
							<!-- 26 -->
							<div class="col-sm-12">
							<div class="radio-box">
								26.
								<input class="radio-check" id="radio-26-1" type="radio" name="radio-26" value="red"/>
								<label for="radio-26-1">very self-confident</label>

								<input class="radio-check" id="radio-26-2" type="radio" name="radio-26" value="blue"/>
								<label for="radio-26-2">cautiously makes friends</label>

								<input class="radio-check" id="radio-26-3" type="radio" name="radio-26" value="green"/>
								<label for="radio-26-3">likes to be thorough</label>

								<input class="radio-check" id="radio-26-4" type="radio" name="radio-26" value="yellow"/>
								<label for="radio-26-4">dresses in trendy ways</label>
							</div>
							</div>
							<!-- 27 -->
							<div class="col-sm-12">
							<div class="radio-box" style="padding-bottom: 20px;">
								27.
								<input class="radio-check" id="radio-27-1" type="radio" name="radio-27" value="green"/>
								<label for="radio-27-1">neat & tidy</label>

								<input class="radio-check" id="radio-27-2" type="radio" name="radio-27" value="yellow"/>
								<label for="radio-27-2">looks good on outside</label>

								<input class="radio-check" id="radio-27-3" type="radio" name="radio-27" value="blue"/>
								<label for="radio-27-3">avoids conflicts</label>

								<input class="radio-check" id="radio-27-4" type="radio" name="radio-27" value="red"/>
								<label for="radio-27-4">usually right</label>
							</div>
							</div>
							
							<input style="float: right;margin-bottom: 50px;margin-right: 20px" type="submit" class="btn btn-primary btn-lg" name="add" value="Submit">
							<input style="background-color: #8f9b98;float: left;margin-left: 20px" type="reset" class="btn btn-primary btn-lg" name="reset" value="Reset">
							
						</form>
						<!-- close choice -->
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
