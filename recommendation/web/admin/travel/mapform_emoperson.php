<?php
	session_start();
	if(empty($_SESSION['username']))
	{
		echo "<script>";
		echo "alert(\" Please Login! \");window.location ='login_form.php';";;
		echo "</script>";
		exit();
	}
	if($_SESSION['status'] != "A")
	{
		echo "<script>";
		echo "alert(\" This page for Admin only! \");";
		echo "window.history.back()";
		echo "</script>";
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mapping Data</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile_admin.php"><i class="fa fa-user fa-fw"></i> Edit Profile</a>
                        </li>
						<li><a href="register_admin.php"><i class="fa fa-upload fa-fw"></i> Register Admin</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-upload fa-fw"></i> Add Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="aform_emotion.php">Emotion</a>
                                </li>
                                <li>
                                    <a href="aform_personality.php">Personality</a>
                                </li>
								<li>
                                    <a href="aform_type.php">Type</a>
                                </li>
                                <li>
                                    <a href="aform_place.php">Place</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

						                        <li>
                            <a href="#"><i class="fa fa-refresh fa-fw"></i> Update Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="showform_emotion.php">Emotion</a>
                                </li>
                                <li>
                                    <a href="showform_personality.php">Personality</a>
                                </li>
								<li>
                                    <a href="showform_type.php">Type</a>
                                </li>
                                <li>
                                    <a href="showform_place.php">Place</a>
                                </li>
								<li>
                                    <a href="mapshow_emoperson.php">Emotion - Personality</a>
                                </li>
								<li>
                                    <a href="mapshow_emotype.php">Emotion - Type</a>
                                </li>
								<li>
                                    <a href="mapshow_persontype.php">Personality - Type</a>
                                </li>
                                <li>
                                    <a href="mapshow_placetype.php">Place - Type</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

						 <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Mapping Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="mapform_emoperson.php">Emotion-Personality</a>
                                </li>
                                <li>
                                    <a href="mapform_emotype.php">Emotion-Type</a>
                                </li>
                                <li>
                                    <a href="mapform_persontype.php">Personality-Type</a>
                                </li>
                                <li>
                                    <a href="mapform_placetype.php">Place-Type</a>
                                </li>
                                <li>
                                    <a href="mapform_placeemo.php">Place-Emotion</a>
                                </li>
                                <li>
                                    <a href="mapform_placeperson.php">Place-Personality</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="table.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                       
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mapping Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Emotion - Personality
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="map_emoperson.php" method="post">
                                        <div class="form-group">
                                            <label>Selects Emotion</label>
                                            <select class="form-control" name="emotion">
												<option value="">-- Please Select Item--</option>
											<?php 
												include('connect_db.php');

												$query = "SELECT * FROM emotions ORDER BY emoID asc" or die("Error:" .mysqli_error());
												$result = mysqli_query($conn,$query);
												while($objResult = mysqli_fetch_array($result))
												{
												?>
												<option value="<?php echo $objResult["emoName"];?>"><?php echo $objResult["emoName"];?></option>
												<?php
												}
												?>
											</select>
                                        </div>

										<div class="form-group">
                                            <label>Selects Personality</label>
											<select class="form-control" name="personality">
												<option value="">-- Please Select Item--</option>
											<?php 
												include('connect_db.php');

												$query = "SELECT * FROM personality ORDER BY personID asc" or die("Error:" .mysqli_error());
												$result = mysqli_query($conn,$query);
												while($objResult = mysqli_fetch_array($result))
												{
												?>
												<option value="<?php echo $objResult["personName"];?>"><?php echo $objResult["personName"];?></option>
												<?php
												}
												?>
											</select>
                                        </div>
                                        
                                        <input type="submit" class="btn btn-default" name="update" id="update" value="Add">
                                        <input type="reset" class="btn btn-default" name="reset" value="Reset">
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
