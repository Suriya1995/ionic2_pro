<?php
	include('connect_db.php');
?>
<body>
<?php
if(empty($_POST["personality"])||empty($_POST["type"])){
	echo "<script language=\"JavaScript\">";
		echo "alert('Please Select Data');window.location ='mapform_persontype.php';";
		echo "</script>";
}
else{
	$sql = "INSERT INTO personality_type(personName,typeName) VALUES('".$_POST["personality"]."','".$_POST["type"]."')";
	$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " .mysqli_error());

	if($result){
		//echo"Record Add Successfully";
		echo "<script language=\"JavaScript\">";
		echo "alert('Save Successfuly');window.location ='mapform_persontype.php';";
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