 <?php
	include('connect_db.php');

	$emoName = $_REQUEST["emoName"];
	//table1
	$check = "SELECT * FROM emotions WHERE emoName='$emoName'";
	$result = mysqli_query($conn,$check) or die ("Error in query: $check " .mysqli_error());
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Emotion already exists!!');window.location ='aform_emotion.php';";
		echo "</script>";
	}
	else{
	$sql = "INSERT INTO emotions(emoName) VALUES('".$_POST["emoName"]."')";
	$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " .mysqli_error());

	if($result){
		//echo"Record Add Successfully";
		echo "<script language=\"JavaScript\">";
		echo "alert('Save Successfuly');window.location ='aform_emotion.php';";
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