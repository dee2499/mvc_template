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
<strong><center><h3>Login Form</h3></center></strong><hr />
<form method="post">
	<table align="center" border="1">
		<tr>
			<td>User Name</td>
			<td><input type="text" name="uname" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass" /></td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				
				<input type="submit" name="login" value="Login" />
				
			</td>
		</tr>
	</table>
</form>
</body>
</html>
