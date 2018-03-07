<?php
	session_start();
	include('connect_db.php');

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
	else
	{
		$strSQL = "INSERT INTO member (firstname,lastname,gender,age,status) VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["gender"]."','".$_POST["age"]."','G')";
		$objQuery = mysqli_query($conn,$strSQL);
		$userID = mysqli_insert_id($conn);
		mysqli_close($conn);

		$_SESSION["ID"] = $userID;
		$_SESSION["status"] = "G";

		Header("Location: quiz.php");
	}
mysqli_close($conn);
?>