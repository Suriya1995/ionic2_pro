<?php
	include('connect_db.php');

//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$emoperID = $_REQUEST["emoperID"];
 
//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา
 
$sql = "DELETE FROM emotion_personality WHERE emoperID='$emoperID' ";
$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'mapshow_emoperson.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>