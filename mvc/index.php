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
<strong><center><h3>Registration Form</h3></center></strong><hr />
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
			<td>Gender</td>
			<td><input type="radio" name="gender" value="male" />Male
				<input type="radio" name="gender" value="female" />Female
			</td>
		</tr>
		<tr>
			<td>Hobby</td>
			<td><input type="checkbox" name="chk[]" value="read" />Read
				<input type="checkbox" name="chk[]" value="play" />Play
			</td>
		</tr>
		<tr>
			<td>Country</td>
			<td>
				<select name="country">
					<option value="Select">Select</option>
					<?php
					foreach($con as $cn)
					{
					?>
						<option value="<?php echo $cn['cid'];?>"><?php echo $cn['cname'];?></option>
					<?php
					}
					?>
					
				</select>
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<input type="submit" name="submit" value="Insert" />
				<a href="login.php"><input type="button" name="login" value="Login" /></a>
				<input type="reset" name="reset" value="Cancel" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>
