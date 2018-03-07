<?php
	include('connect_db.php');


$placeperson_ID = $_REQUEST["placeperson_ID"];

 
$sql = "DELETE FROM place_personality WHERE placeperson_ID='$placeperson_ID' ";
$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
 

	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'mapshow_placeperson.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>