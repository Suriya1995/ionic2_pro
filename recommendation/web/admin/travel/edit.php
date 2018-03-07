<html>
<head>
<title>test</title>
</head>
<form role="form" action="map_emoperson.php">
<?php
	include('connect_db.php');

$query = "SELECT * FROM emotions ORDER BY emoID asc" or die("Error:" .mysqli_error());
$result = mysqli_query($conn,$query);
?>
                                            <select class="form-control">
											<?php
											while($row = mysqli_fetch_array($result)){
											?>
                                            <option value="<?=$row['emoID']?>"><?=$row['emoName']?></option>
											<?
											}
											?>
                                            </select>
		<input name="btnSubmit" type="submit" value="Submit">
	</form>
</body>
</html>
<?
	mysqli_close();
?>