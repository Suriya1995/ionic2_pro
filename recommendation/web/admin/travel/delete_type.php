<?php
	include('connect_db.php');

//���ҧ���������Ѻ�Ѻ��� member_id �ҡ����ʴ�������
$typeID = $_REQUEST["typeID"];
 
//ź�������͡�ҡ database
 
$sql = "DELETE FROM type WHERE typeID='$typeID' ";
$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
 
//����ʤ�Ի�ʴ���ͤ�������ͺѹ�֡������С��ⴴ��Ѻ�˹�ҿ����
	
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