<?php
	include('connect_db.php');
?>
<body>
<?php
if(empty($_POST["typeName"])||empty($_POST["place"])){
	echo "<script language=\"JavaScript\">";
		echo "alert('Please Select Data');window.location ='mapform_placetype.php';";
		echo "</script>";
}
else{
	$sql = "INSERT INTO place_type(fk_place_Name,placetype_Name) VALUES('".$_POST["place"]."','".$_POST["typeName"]."')";
	$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " .mysqli_error());

	if($result){
		//echo"Record Add Successfully";
		echo "<script language=\"JavaScript\">";
		echo "alert('Save Successfuly');window.location ='mapform_placetype.php';";
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