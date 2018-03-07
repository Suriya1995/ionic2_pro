<?php
	include('connect_db.php');


$placetype_ID = $_REQUEST["placetype_ID"];
 

 
$sql = "DELETE FROM place_type WHERE placetype_ID='$placetype_ID' ";
$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
 

	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'mapshow_placetype.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>