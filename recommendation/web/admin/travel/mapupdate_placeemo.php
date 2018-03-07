<?php
	include('connect_db.php');


	$placeemo_ID = $_REQUEST["placeemo_ID"];
	$placeemo_Name = $_REQUEST["placeemo_Name"];
	$placeemotype_Name = $_REQUEST["placeemotype_Name"];


	
$sql = "UPDATE place_emotion SET placeemo_Name='$placeemo_Name',placeemotype_Name='$placeemotype_Name' WHERE placeemo_ID='$placeemo_ID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn);
 

	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'mapshow_placeemo.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>