<?php
	include('connect_db.php');

//���ҧ���������Ѻ�Ѻ��ҷ�������䢨ҡ�����
	$emotypeID = $_REQUEST["emotypeID"];
	$emoName = $_REQUEST["emoName"];
	$typeName = $_REQUEST["typeName"];

//�ӡ�û�Ѻ��ا�����ŷ������ŧ� database 
	
$sql = "UPDATE emotion_type SET emoName='$emoName',typeName='$typeName' WHERE emotypeID='$emotypeID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn);
 
//����ʤ�Ի�ʴ���ͤ�������ͺѹ�֡������С��ⴴ��Ѻ�˹�ҿ����
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'mapshow_emotype.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
}
?>