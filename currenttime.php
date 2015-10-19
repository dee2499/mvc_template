<?php
	
	$time_now=mktime(date('h')+5,date('i')+30,date('s'));
	echo "current time is: " . date('h:i:s',$time_now);
?>