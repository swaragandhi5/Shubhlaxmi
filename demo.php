<?php
	include 'db.php';
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		mysqli_query($con, "INSERT INTO `student_master`( `stu_name`, `stu_address`, `stu_email`, `stu_cntc`) VALUES ('".$name."','".$address."','".$email."','".$contact."')");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="Enter name" required /></td>
			</tr>
			
			<tr>
				<td>Address</td>
				<td><textarea name="address" placeholder="Enter address" required /></textarea></td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="Enter email id" required /></td>
			</tr>
			
			<tr>
				<td>contact</td>
				<td><input type="text" name="contact" placeholder="Enter contact no" required /></td>
			</tr>
			
			<tr>
				<td><input type="submit" name="submit" value="submit" /></td>
			</tr>
		</table>
	</form><br /><br />
	<table border="1" align="center">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Address</td>
			<td>Email</td>
			<td>Contact no</td>
			<td>Action</td>
		</tr>
		
		<?php
			$i=1;
			$result = mysqli_query($con,"SELECT * FROM `student_master`");
			while($array = mysqli_fetch_array($result))
			{
		?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $array['stu_name'];?></td>
				<td><?php echo $array['stu_address'];?></td>
				<td><?php echo $array['stu_email'];?></td>
				<td><?php echo $array['stu_cntc'];?></td>
				<td><a href="update.php?id=<?php echo $array['stu_id'];?>">Update</a><a href="delete.php?id=<?php echo $array['stu_id'];?>">Delete</a>
			</tr>
			<?php
				$i++;	
			}
			?>
	</table>
</body>
</html>
