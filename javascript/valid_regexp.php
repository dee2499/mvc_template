<html>
<head>
<meta name="generator" content="PhpED Version 5.9 (Build 5921)">
<title></title>
<link rel="shortcut icon"  href="">
<script type="text/javascript">
    function validform(theform)
    {
        var reason = "" ;
        
        reason += validateuser(theform.uname);
        reason += validpass(theform.pass);
        
        if(reason != "")
        {
            alert("Need Correction" + reason);
            return false;
        }
        return true;
    }                
    
    function validateuser(fld)
    {
      var err = "";
      var illegalchar = /\W/;
      if(fld.value == '')
      {
          error = "you diidn't enter name..";
      }  
      else if((fld.value.length < 5) || (fld.value.length > 15))
      {
          error = "Wrong Length..";
      }
      else if(illegachar.test(fld.value))
      {                                                    
          error = "Incorrect User Name..."
      }
      else
      {
          return error;
      }
    }                         
    
    function validpass(fld)
    {
        var err = "";
        var illegalchar = /[\W_]/;
        
        if(fld.value = '')
        {
            error = "Plz Enter Password..";
        }
        else if((fld.value.length) < 6)
        {
            error = "Weak Password";
        }
        else if(illegachar.test(fld.value))
        {
            error = "Must enter Letter and Number...";
        }
        else
        {
            return error;
        }
    }                           
</script>
</head>
<body>
<form action="" name="frm" method="post" onsubmit="return validform(this)">
    Enter Name: <input type="text" name="uname"><br>
    Enter Password: <input type="password" name="pass"><br>
    <input type="submit" name="submit" value="submit">
</form>  
</body>
</html>