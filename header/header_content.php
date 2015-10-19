<?php
	if(isset($_REQUEST['image']))
	{
		header("Content-type:image/jpeg");
		header("Content-Disposition:attechment;filename=\"Sunset.jpg\"");
		readfile("Sunset.jpg");
		
	
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="header_content.php" method="post">
	<table>
		<tr>
			<td><input type="submit" name="image" value="DownloadImage"></td>
		</tr>
	</table>
</form>
</body>
</html>
