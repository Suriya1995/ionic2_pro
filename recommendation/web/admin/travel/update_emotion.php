<?php
	include('connect_db.php');

//���ҧ���������Ѻ�Ѻ��ҷ�������䢨ҡ�����
	$emoID = $_REQUEST["emoID"];
	$emoName = $_REQUEST["emoName"];

	$check = "SELECT * FROM emotions WHERE emoName='$emoName'";
	$result = mysqli_query($conn,$check) or die ("Error in query: $check " .mysqli_error());
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('You already have !');window.location ='showform_emotion.php';";
		echo "</script>";
	}
	else{
//�ӡ�û�Ѻ��ا�����ŷ������ŧ� database 
	
$sql = "UPDATE emotions SET emoName='$emoName' WHERE emoID='$emoID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn);
 
//����ʤ�Ի�ʴ���ͤ�������ͺѹ�֡������С��ⴴ��Ѻ�˹�ҿ����
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'showform_emotion.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
	}
}
?>