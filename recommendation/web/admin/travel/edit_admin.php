<?php
	include('connect_db.php');

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
	}else{
	
	$adminID = $_REQUEST["adminID"];
	$password = $_REQUEST["password"];
	$firstname = $_REQUEST["firstname"];
	$lastname = $_REQUEST["lastname"];

	$sql = "UPDATE member SET password='$password',firstname='$firstname',lastname='$lastname' WHERE adminID='$adminID' ";
	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	 
	mysqli_close($conn);
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'profile_admin.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
	}
	}
?>