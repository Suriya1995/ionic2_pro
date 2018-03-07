<?php
session_start();
	if(isset($_REQUEST['username'])){
//àª×èÍÁµèÍdatabase
	include("connect_db.php");
//ÃÑº¤èÒuseráÅÐpassword
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
//query
	$sql = "SELECT * FROM member WHERE username='".$username."' and password='".$password."'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);

		$_SESSION["adminID"] = $row["adminID"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["status"] = $row["status"];

		if($_SESSION["status"]=="A"){
			Header("Location: index.php");
		
		}

		if($_SESSION["status"]=="U"){
			Header("Location: green/index.php");
		}
	
	}else{
		echo "<script>";
		echo "alert(\" Username or Password Incorrect! \");";
		echo "window.history.back()";
		echo "</script>";
		}
	}else{
		Header("Location: login_form.php");
	}

?>