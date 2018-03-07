<?php
	include('connect_db.php');

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$personID = $_REQUEST["personID"];
	$personName = $_REQUEST["personName"];

	$check = "SELECT * FROM personality WHERE personName='$personName'";
	$result = mysqli_query($conn,$check) or die ("Error in query: $check " .mysqli_error());
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('You already have !');window.location ='showform_personality.php';";
		echo "</script>";
	}
	else{
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
$sql = "UPDATE personality SET personName='$personName' WHERE personID='$personID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn);
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'showform_personality.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
	}
}
?>