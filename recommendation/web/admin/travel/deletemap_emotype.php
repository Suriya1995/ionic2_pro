<?php
	include('connect_db.php');

//���ҧ���������Ѻ�Ѻ��� member_id �ҡ����ʴ�������
$emotypeID = $_REQUEST["emotypeID"];
 
//ź�������͡�ҡ database ��� member_id �������
 
$sql = "DELETE FROM emotion_type WHERE emotypeID='$emotypeID' ";
$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
 
//����ʤ�Ի�ʴ���ͤ�������ͺѹ�֡������С��ⴴ��Ѻ�˹�ҿ����
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'mapshow_emotype.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>