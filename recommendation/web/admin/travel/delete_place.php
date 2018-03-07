<?php
	include('connect_db.php');


$place_ID = $_REQUEST["place_ID"];
 
// database
 
$sql = "DELETE FROM place WHERE place_ID='$place_ID' ";
$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
 

	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'showform_place.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>