<?php
	include('connect_db.php');

	if(trim($_POST["username"])=="")
	{
		echo "<script>";
		echo "alert(\" Please input Username! \");";
		echo "window.history.back()";
		echo "</script>";
	}

		if(trim($_POST["password"])=="")
	{
		echo "<script>";
		echo "alert(\" Please input Password! \");";
		echo "window.history.back()";
		echo "</script>";
	}

	if($_POST["password"] != $_POST["conpassword"])
	{
		echo "<script>";
		echo "alert(\" Password not Match! \");";
		echo "window.history.back()";
		echo "</script>";
	}

		if(trim($_POST["firstname"])=="")
	{
		echo "<script>";
		echo "alert(\" Please input Firstname! \");";
		echo "window.history.back()";
		echo "</script>";
	}

		if(trim($_POST["lastname"])=="")
	{
		echo "<script>";
		echo "alert(\" Please input Lastname! \");";
		echo "window.history.back()";
		echo "</script>";
	}

	$strSQL = "SELECT * FROM member WHERE username = '".trim($_POST["username"])."'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo "<script>";
		echo "alert(\" Username already exists! \");";
		echo "window.history.back()";
		echo "</script>";
	}
	else
	{
		$strSQL = "INSERT INTO member (username,password,firstname,lastname,status) VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["status"]."')";
		$objQuery = mysqli_query($conn,$strSQL);
		echo "<script>";
		echo "alert(\" Register Completed! \");";
		echo "window.history.back()";
		echo "</script>";
	}
mysqli_close($conn);
?>