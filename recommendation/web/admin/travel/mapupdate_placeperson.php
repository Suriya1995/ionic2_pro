<?php
	include('connect_db.php');


	$placeperson_ID = $_POST["placeperson_ID"];
	$placeperson_Name = $_POST["placeperson_Name"];
	$placepersontype_Name = $_POST["placepersontype_Name"];


	
$sql = "UPDATE place_personality SET placeperson_Name='$placeperson_Name',placepersontype_Name='$placepersontype_Name' WHERE placeperson_ID='$placeperson_ID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn);
 

	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'mapshow_placeperson.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>