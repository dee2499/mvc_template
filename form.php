<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Form</title>
<script type="text/javascript">
	function valid()
	{
		var x=document.forms["frm"]["uname"].value;
		if (x==null || x=="")
		{
		  alert("Plz enter User Name");
		  return false;
  		}
		
		var x=document.forms["frm"]["pass"].value;
		if (x==null || x=="")
		{
		  alert("Plz enter Password");
		  return false;
  		}
		
		var x=document.forms["frm"]["add"].value;
		if (x==null || x=="")
		{
		  alert("Plz enter Address");
		  return false;
  		}
		
		
		
		var x=document.forms["frm"]["color"].value;
		if (x==null || x=="")
		{
		  alert("Plz Select Color");
		  return false;
  		}
		
		var x=document.forms["frm"]["hby"].value;
		if (x==null || x=="")
		{
		  alert("Plz Select Hobby");
		  return false;
  		}
	}
</script>

</head>

<body><center><h3><strong>Form</strong></h3></center>
	<form action="form.php" method="post" name="frm" onsubmit="return valid()">
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
				<td>Address</td>
				<td><textarea rows="5" cols="15" name="add"></textarea></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="M" />Male
				    <input type="radio" name="gender" value="F" />Female</td>
			</tr>
			<tr>
				<td>Fev.Color</td>
				<td><select name="color">
						<option value="red" selected="selected">Red</option>
						<option value="yellow">Yellow</option>
				    </select></td>
			</tr>
			<tr>
				<td>Hobby</td>
				<td><input type="checkbox" name="hby[]" value="Read" />Read
				    <input type="checkbox" name="hby[]" value="Internet" />Internet</td>
			</tr>
			<tr>
				<td>Photo</td>
				<td><input type="file" name="file" /></td>			
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" /></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if(isset($_REQUEST['submit']))
	{
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$add=$_POST['add'];
		$gen=$_POST['gender'];
		$color=$_POST['color'];
		$temp=$_POST['hby'];
		if($temp)
		{
			$hby=implode(",",$temp);
		}
		
		
		echo "welcome:" . " " . $uname;
		echo "<br/>";
		echo "Password:" . " " . $pass;
		echo "<br/>";
		echo "Address:" . " " . $add;
		echo "<br/>";
		echo "Gender:" . " " . $gen;
		echo "<br/>";
		echo "Fev.Color:" . " " . $color;
		echo "<br/>";
		echo "Hobby:" . " " . $hby;
		


	}
?>