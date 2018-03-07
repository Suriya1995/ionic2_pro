<?php
	include('connect_db.php');

//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$typeID = $_REQUEST["typeID"];
 
//ลบข้อมูลออกจาก database
 
$sql = "DELETE FROM type WHERE typeID='$typeID' ";
$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'showform_type.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>