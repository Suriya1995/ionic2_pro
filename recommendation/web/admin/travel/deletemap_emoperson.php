<?php
	include('connect_db.php');

//���ҧ���������Ѻ�Ѻ��� member_id �ҡ����ʴ�������
$emoperID = $_REQUEST["emoperID"];
 
//ź�������͡�ҡ database ��� member_id �������
 
$sql = "DELETE FROM emotion_personality WHERE emoperID='$emoperID' ";
$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
 
//����ʤ�Ի�ʴ���ͤ�������ͺѹ�֡������С��ⴴ��Ѻ�˹�ҿ����
	
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