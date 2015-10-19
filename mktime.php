<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>

<?php
	$tomorrow = mktime(0,0,0,date("m"),date("d")+3,date("y"));
	
	echo "Tomorrow is " . date("y/m/d",$tomorrow);
?>
</body>
</html>
