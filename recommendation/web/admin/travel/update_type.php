<?php
	include('connect_db.php');

//���ҧ���������Ѻ�Ѻ��ҷ�������䢨ҡ�����
	$typeID = $_REQUEST["typeID"];
	$typeName = $_REQUEST["typeName"];

	$check = "SELECT * FROM type WHERE typeName='$typeName'";
	$result = mysqli_query($conn,$check) or die ("Error in query: $check " .mysqli_error());
	$num = mysqli_num_rows($result);
	if($num>0)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('You already have !');window.location ='showform_type.php';";
		echo "</script>";
	}
	else{
//�ӡ�û�Ѻ��ا�����ŷ������ŧ� database 
	
$sql = "UPDATE type SET typeName='$typeName' WHERE typeID='$typeID' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
mysqli_close($conn);
 
//����ʤ�Ի�ʴ���ͤ�������ͺѹ�֡������С��ⴴ��Ѻ�˹�ҿ����
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'showform_type.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
	echo "</script>";
	}
}
?>