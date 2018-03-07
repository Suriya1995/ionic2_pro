<?php
	include('connect_db.php');


$placeemo_ID = $_REQUEST["placeemo_ID"];

 
$sql = "DELETE FROM place_emotion WHERE placeemo_ID='$placeemo_ID' ";
$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
 

	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'mapshow_placeemo.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>