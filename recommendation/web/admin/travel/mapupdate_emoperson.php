<?php
	include('connect_db.php');

//���ҧ���������Ѻ�Ѻ��ҷ�������䢨ҡ�����
	$emoperID = $_REQUEST["emoperID"];
	$emoName = $_REQUEST["emoName"];
	$personName = $_REQUEST["personName"];

//�ӡ�û�Ѻ��ا�����ŷ������ŧ� database 
	
$sql = "UPDATE emotion_personality SET emoName='$emoName',personName='$personName' WHERE emoperID='$emoperID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn);
 
//����ʤ�Ի�ʴ���ͤ�������ͺѹ�֡������С��ⴴ��Ѻ�˹�ҿ����
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'mapshow_emoperson.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>