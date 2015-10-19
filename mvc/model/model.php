<?php
class model
{
	public function model()
	{
		mysql_connect("localhost","root","");
		mysql_select_db("sample");
	}
	public function fetch_country()
	{
		$sel = "select * from country";
		$ex = mysql_query($sel);
		
		while($res=mysql_fetch_array($ex))
        {
            $r[]=$res;
        }
        return $r;
		
	}
	
	public function add_data($u,$p,$g,$h,$c)
	{
		$ins = "insert into reg (uname,pass,gender,hobby,country) values ('$u','$p','$g','$h','$c')";
		$ex = mysql_query($ins);
		return $ex;
	}
	
	public function login($u,$p)
	{
		$sel = "select * from reg where uname = '$u' && pass = '$p'";
		$ex = mysql_query($sel);
		return $ex;
	}
	
	public function fetch_data()
	{
		$sel = "select reg.*,country.cname from reg join country on reg.country = country.cid";
		$ex = mysql_query($sel);
		
		while($res=mysql_fetch_array($ex))
        {
            $r[]=$res;
        }
        return $r;
	}
	public function delete($d)
	{
		$del = "delete from reg where uid = '$d'";
		$ex = mysql_query($del);
	}
}

?>