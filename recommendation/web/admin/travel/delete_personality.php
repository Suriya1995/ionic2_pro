<?php
	include('connect_db.php');
//���ҧ���������Ѻ�Ѻ��� member_id �ҡ����ʴ�������
$personID = $_REQUEST["personID"];
 
//ź�������͡�ҡ database ��� member_id �������
 
$sql = "DELETE FROM personality WHERE personID='$personID' ";
$result = mysqli_query($conn,$sql) or die ("Error in query: $sql " . mysqli_error());
 
//����ʤ�Ի�ʴ���ͤ�������ͺѹ�֡������С��ⴴ��Ѻ�˹�ҿ����
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'showform_personality.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>