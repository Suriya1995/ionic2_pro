<?php
	include('connect_db.php');

	$place_Name = $_REQUEST["place_Name"];
	//table1
	$check = "SELECT * FROM place WHERE place_Name='$place_Name'";
	$result = mysqli_query($conn,$check) or die ("Error in query: $check " .mysqli_error());
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Personality already exists!');window.location ='aform_place.php';";
		echo "</script>";
	}
	else{
	$sql = "INSERT INTO place(place_Name) VALUES('".$_POST["place_Name"]."')";
	$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " .mysqli_error());

	if($result){
		//echo"Record Add Successfully";
		echo "<script language=\"JavaScript\">";
		echo "alert('Save Successfuly');window.location ='aform_place.php';";
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "alert('Error!');";
		echo "</script>";
	}
	}
mysqli_close($conn);
?>