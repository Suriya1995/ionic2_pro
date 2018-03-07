<?php
session_start();
	if(isset($_REQUEST['username'])){

	include("connect_db.php");

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$sql = "SELECT * FROM member WHERE username='".$username."' and password='".$password."'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);

		$_SESSION["ID"] = $row["ID"];
		$_SESSION["username"] = $row["username"];
		$_SESSION["status"] = $row["status"];

		if($_SESSION["status"]=="U"){
			Header("Location: profile.php");
		}
		if($_SESSION["status"]=="A"){
			echo "<script>";
			echo "alert(\" This Username isn't member \");";
			echo "window.history.back()";
			echo "</script>";
		}
		else{
			echo "<script>";
			echo "alert(\" Username or Password Incorrect! \");";
			echo "window.history.back()";
			echo "</script>";
		}
	}
	else{
		Header("Location: profile.php");
	}
}
?>