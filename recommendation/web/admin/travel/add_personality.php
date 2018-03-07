<?php
	include('connect_db.php');

	$personName = $_REQUEST["personName"];
	//table1
	$check = "SELECT * FROM personality WHERE personName='$personName'";
	$result = mysqli_query($conn,$check) or die ("Error in query: $check " .mysqli_error());
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Personality already exists!');window.location ='aform_personality.php';";
		echo "</script>";
	}
	else{
	$sql = "INSERT INTO personality(personName) VALUES('".$_POST["personName"]."')";
	$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " .mysqli_error());

	if($result){
		//echo"Record Add Successfully";
		echo "<script language=\"JavaScript\">";
		echo "alert('Save Successfuly');window.location ='aform_personality.php';";
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