<html>
<head>
<meta name="generator" content="PhpED Version 5.9 (Build 5921)">
<title></title>
<link rel="shortcut icon"  href="">
<script type="text/javascript">
    function valid()
    {
        if(document.frm.name.value == '/\W/')
        {
            alert('Enetr Name..');
            return false;
        }
        
        if(document.frm.lname.value == '')
        {
            alert('Enetr LastName..');
            return false;
        }
        
    }
</script>
</head>
<body>
<form method="post" name="frm" onsubmit="return valid()"> 
    Enate Name:<input type="text" name="name"><br>
     Enate LastName:<input type="text" name="lname"><br> 
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>