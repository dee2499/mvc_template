<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$nextweek = time() + (7*24*60*60);
	echo "Nextweek is : " . date('y-m-d',$nextweek);
	
	echo "Nextweek is : " . date('y-m-d',strtotime('+2 week'));
	
	
	
	
	
	
	
	
	
?>
</body>
</html>
