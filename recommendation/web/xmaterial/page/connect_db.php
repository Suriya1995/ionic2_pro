<?php
$conn=mysqli_connect("emuseum_db","root","heavygeese24","travel") or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");
?>