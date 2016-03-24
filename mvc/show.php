<?php
include('control/control.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<strong><center><h3>View Form</h3></center></strong><hr />
<form method="post">
	<table align="center" border="1">
		<tr>
			<th>Uid</th>
			<th>User Name</th>
			<th>Password</th>
			<th>Gender</th>
			<th>Hobby</th>
			<th>Country</th>
			<th align="center">Action</th>
		</tr>
		<?php
		foreach($view as $r)
		{
		?>
		<tr>
			<td><?php echo $r['uid'];?></td>
			<td><?php echo $r['uname'];?></td>
			<td><?php echo $r['pass'];?></td>
			<td><?php echo $r['gender'];?></td>
			<td><?php echo $r['hobby'];?></td>
			<td><?php echo $r['cname'];?></td>
			<td><a href="show.php?del_id=<?php echo $r['uid'];?>">Delete</a></td>
		</tr>
		<?php
		}
		?>
	</table>
</form>
</body>
</html>
