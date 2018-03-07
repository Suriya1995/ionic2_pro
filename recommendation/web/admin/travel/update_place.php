<?php
	include('connect_db.php');

//
	$place_ID = $_POST["place_ID"];
	$place_Name = $_POST["place_Name"];


	$check = "SELECT * FROM place WHERE place_Name='$place_Name'";
	$result = mysqli_query($conn,$check) or die ("Error in query: $check " .mysqli_error());
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('You already have !');window.location ='showform_place.php';";
		echo "</script>";
	}
	else{
// database 
	
$sql = "UPDATE place SET place_Name='$place_Name' WHERE place_ID='$place_ID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn);
 

	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'showform_place.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
	}
}
?>