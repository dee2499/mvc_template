<?php

	ob_start();
	if(true)
	{
		echo "you are in";
	}
	else
	{
		echo"you redirect within 5 second....";
		header("Refresh:5;url=http://www.google.co.in/");
	}
	ob_flush();
	
?>