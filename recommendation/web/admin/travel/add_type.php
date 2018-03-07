<?php
	include('connect_db.php');

	$typeName = $_REQUEST["typeName"];
	//table1
	$check = "SELECT * FROM type WHERE typeName='$typeName'";
	$result = mysqli_query($conn,$check) or die ("Error in query: $check " .mysqli_error());
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Type already exists!');window.location ='aform_type.php';";
		echo "</script>";
	}
	else{
	$sql = "INSERT INTO type(typeName) VALUES('".$_POST["typeName"]."')";
	$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " .mysqli_error());

	if($result){
		//echo"Record Add Successfully";
		echo "<script language=\"JavaScript\">";
		echo "alert('Save Successfuly');window.location ='aform_type.php';";
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