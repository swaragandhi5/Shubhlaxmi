<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		include 'db.php';
		$id=$_REQUEST['id'];
		$data=mysqli_query($con, "select * from student_namster where id=".$stu_id);
		$row=mysqli_fetch_array($data);
		if(isset($_POST['submit']))
		{
			$name=$_POST['name'];
			$address=$_POST['address'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			
			mysqli_query($con, "UPDATE `student_master` SET `stu_name`='".$name."',`stu_address`='".$address."',`stu_email`='".$email."',`stu_cntc`='".$contact."' WHERE `stu_id`=".$id);
			header("localhost:demo.php"); 
		}
	?>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $row['stu_name']; ?>" required /></td>
			</tr>
			
			<tr>
				<td>Address</td>
				<td><textarea name="address" value="<?php echo $row['stu_address']; ?>" required /></textarea></td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $row['stu_email']; ?>" required /></td>
			</tr>
			
			<tr>
				<td>contact</td>
				<td><input type="text" name="contact" value="<?php echo $row['stu_cntc']; ?>" required /></td>
			</tr>
			
			<tr>
				<td><input type="submit" name="submit" value="submit" /></td>
			</tr>
		</table>
	</form>
	
</body>
</html>
