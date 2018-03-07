<?php
	include('connect_db.php');

	if(trim($_POST["password"])=="")
	{
		echo "<script>";
		echo "alert(\" Please input Password! \");";
		echo "window.history.back()";
		echo "</script>";
	}

	if($_POST["password"] != $_POST["repassword"])
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
	if ($_FILES["profile_pic"]["name"]!="") {
		$ext = pathinfo(basename($_FILES['profile_pic']['name']),PATHINFO_EXTENSION);
		if($ext!="jpg"&&$ext!="jpeg"&&$ext!="png"&&$ext!="gif") {
			echo "<script>";
			echo "alert(\" Sorry, only JPG, JPEG, PNG & GIF files are allowed! \");";
			echo "window.history.back()";
			echo "</script>";
		}
// 		if ($_FILES["profile_pic"]["size"] >= 1048576) {
//     		echo "<script>";
// 			echo "alert(\" Sorry, your file is too large! \");";
// 			echo "window.history.back()";
// 			echo "</script>";
// 		}
		else {
		$new_image_name = 'user_'.$_POST["username"].".".$ext;
		$image_path = "/var/www/html/service/recommendation/web/xmaterial/page/images/";
		$upload_path = $image_path.$new_image_name;
		//upload image
		move_uploaded_file($_FILES['profile_pic']['tmp_name'], $upload_path);
		$pro_image = $new_image_name;

		$username = $_REQUEST["username"];
		$password = $_REQUEST["password"];
		$firstname = $_REQUEST["firstname"];
		$lastname = $_REQUEST["lastname"];
		$age = $_REQUEST["age"];
		$gender = $_REQUEST["gender"];


		$sql = "UPDATE member SET password='$password',firstname='$firstname',lastname='$lastname',age='$age',gender='$gender',profile_pic='$pro_image' WHERE username='$username' ";
		$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
	 
		mysqli_close($conn);
			if($result){
				echo "<script type='text/javascript'>";
				echo "alert('Update Succesfuly');";
				echo "window.location = 'profile_edit.php'; ";
				echo "</script>";
			}
			else{
				echo "<script type='text/javascript'>";
				echo "alert('Error back to Update again');";
				echo "</script>";
			}
		}
	}
	else {
		$username = $_REQUEST["username"];
		$password = $_REQUEST["password"];
		$firstname = $_REQUEST["firstname"];
		$lastname = $_REQUEST["lastname"];
		$age = $_REQUEST["age"];
		$gender = $_REQUEST["gender"];

		$sql = "UPDATE member SET password='$password',firstname='$firstname',lastname='$lastname',age='$age',gender='$gender' WHERE username='$username' ";
		$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
	 
		mysqli_close($conn);
			if($result){
				echo "<script type='text/javascript'>";
				echo "alert('Update Succesfuly');";
				echo "window.location = 'profile_edit.php'; ";
				echo "</script>";
			}
			else{
				echo "<script type='text/javascript'>";
				echo "alert('Error back to Update again');";
				echo "</script>";
			}
	}
?>