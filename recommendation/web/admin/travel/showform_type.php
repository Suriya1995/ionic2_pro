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

    <title>Type</title>

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
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tables of Type
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
<?php
	include('connect_db.php');

$query = "SELECT * FROM type ORDER BY typeID asc" or die("Error:" .mysqli_error());
$result = mysqli_query($conn,$query);

                                echo "<tbody>";
								while($row = mysqli_fetch_array($result)){
                                echo    "<tr align='center'>";
                                        echo "<td>" .$row["typeID"]. "</td>";
										echo "<td>" .$row["typeName"]. "</td>";

										echo "<td><a href='edit_type.php?typeID=$row[0]'>Edit</a></td>";

										echo "<td><a href='delete_type.php?typeID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">Delete</a></td> ";
										echo "</tr>";
								}
                                echo "</tbody>";
								?>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
