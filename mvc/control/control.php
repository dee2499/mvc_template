<?php
include('model/model.php');

	
	$obj = new model();
	$con = $obj->fetch_country();


	//insert
	if(isset($_POST['submit']))
	{
		$u = $_POST['uname'];
		$p = $_POST['pass'];
		$g = $_POST['gender'];
		$h = implode(",",$_POST['chk']);
		$c = $_POST['country'];
		
		$i = $obj->add_data($u,$p,$g,$h,$c);
		if($i)
		{
			echo "Insert Successfull.....";
			
		}
		
	}
	
	//login
	if(isset($_POST['login']))
	{
		$u = $_REQUEST['uname'];
		$p = $_POST['pass'];
		$s = $obj->login($u,$p);
		$r = mysql_fetch_array($s);
		$row = mysql_num_rows($s);
		
		if($row > 0)
		{
			header("location:show.php");
		}
		else
		{
			echo "invalid username and password...";
		}
		
	}
	
	//view_data
	
	$view = $obj->fetch_data();
	
	//delete data
	
	if(isset($_REQUEST['del_id']))
	{
		$d = $_REQUEST['del_id'];
		$obj->delete($d);
		header("location:show.php");
	}
?>