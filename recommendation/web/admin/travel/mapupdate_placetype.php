<?php
	include('connect_db.php');


	$placetype_ID = $_REQUEST["placetype_ID"];
	$fk_place_Name = $_REQUEST["fk_place_Name"];
	$placetype_Name = $_REQUEST["placetype_Name"];


	
$sql = "UPDATE place_type SET fk_place_Name='$fk_place_Name',placetype_Name='$placetype_Name' WHERE placetype_ID='$placetype_ID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn);
 

	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'mapshow_placetype.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>