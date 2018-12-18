<?php
 
	include 'db.php';
	$id=$_REQUEST['id'];
	mysqli_query($con, "DELETE FROM `student_master` where stu_id=".$id);
	header("location:demo.php");
?>
 