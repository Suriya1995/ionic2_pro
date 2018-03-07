<?php
	include('connect_db.php');

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$persontypeID = $_REQUEST["persontypeID"];
	$personName = $_REQUEST["personName"];
	$typeName = $_REQUEST["typeName"];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
$sql = "UPDATE personality_type SET personName='$personName',typeName='$typeName' WHERE persontypeID='$persontypeID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn);
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'mapshow_persontype.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>