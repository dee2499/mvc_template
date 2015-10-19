<?php
	$animal1=array("a"=>"Tiger","b"=>"Lion");
	$animal2=array("c"=>"Dog","b"=>"Lion");
	$animal3=array("c"=>"Dog","b"=>"Cat");
	$fruit=array("Apple","mango");
	$no=array(0=>"5",1=>"10",2=>15,3=>20);
	$no1=array(0=>"5",1=>"10",2=>15,3=>20,4=>20);
	
	
	//array_combine();
	print_r(array_combine($animal1,$fruit));
	
	echo "<br/>";
	
	//array_count_values()
	print_r(array_count_values($no));
	
	echo "<br/>";
	//array_diff()
	print_r(array_diff($animal1,$animal2));
	
	echo "<br/>";
	//array_merge()
	print_r(array_merge($animal1,$animal2));
	
	echo "<br/>";
	//array_merge_recursive()
	print_r(array_merge_recursive($animal1,$animal3));
	
	echo "<br/>";
	//array_reverse()
	print_r(array_reverse($animal1));
	
	
	echo "<br/>";
	//array_search()
	print_r(array_search("Tiger",$animal1));
	
	echo "<br/>";
	//array_sum()
	print_r(array_sum($no));
	
	echo "<br/>";
	//arsort()
	arsort($animal1);
	print_r($animal1);
	
	echo "<br/>";
	//asort()
	asort($animal1);
	print_r($animal1);
	
	echo "<br/>";
	//krsort()
	krsort($animal1);
	print_r($animal1);
	
	echo "<br/>";
	//ksort()
	ksort($animal1);
	print_r($animal1);
	
	echo "<br/>";
	//sizeof()
	print_r(sizeof($fruit));
	
	echo "<br/>";
	//array_shift()
	echo array_shift($animal1);
	print_r ($animal1);
	
	echo "<br/>";
	//array_slice()
	print_r(array_slice($no,1,2));
	
	
	echo "<br/>";
	//array_unique()
	print_r(array_unique($no));
	
	echo "<br/>";
	//array_unshift()
	array_unshift($animal1,"Horse");
	print_r($animal1);
	
	echo "<br/>";
	//array_values()
	print_r(array_values($no));
	

	function myfunction($value,$key)
	{
		echo "The key $key has the value $value<br />";
	}
	$a1=array("a"=>"Cat","b"=>"Dog");
	$a2=array($a1,"1"=>"Bird","2"=>"Horse");
	array_walk_recursive($a2,"myfunction");

	//list function
	echo "<br/>";
	$myarray=array("Apple","Ball","cat");
	list($a,$b,$c) = $myarray;
	
	echo "I heva an $a,$b,$c."; 
	
	
	//array_intersect function
	echo "<br/>";
	$i1=array(0=>"a",1=>"b",2=>"c");
	$i2=array(0=>"a",1=>"d",2=>"c");
	
	print_r(array_intersect($i1,$i2));
	
	//array_key_exists function
	echo "<br/>";
	$e=array("a"=>"apple","b"=>"cat");
	if(array_key_exists("z",$e))
	{
		echo "Exists...";
	}
	else
	{
		echo "Not Exists";
	}
	//array_keys function
	echo "<br/>";
	print_r(array_keys($e));
	
	//array_multisort function
	echo "<br/>";
	$m1=array("Dog","Cat");
	$m2=array("Fido","Missy");
	array_multisort($m1,$m2);
	print_r($m1);
	print_r($m2);
	
	//array_pad function
	echo "<br/>";
	$p=array("Dog","Cat");
	print_r(array_pad($p,4,"Apple"));
	
	
	//array_pop function
	echo "<br/>";
	$pad=array("Dog","Cat","Horse");
	array_pop($pad);
	print_r($pad);
	array_pop($pad);
	print_r($pad);
	
	
	//array_push function
	echo "<br/>";
	$push=array("Dog","Cat");
	array_push($push,"Horse","Bird");
	print_r($push);
	
	//array_rand function
	echo "<br/>";
	$rand=array("a"=>"Dog","b"=>"Cat","c"=>"Horse");
	print_r(array_rand($rand,1));
	
	
	
?>
	
	
	
	
