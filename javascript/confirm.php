<html>
<head>
<meta name="generator" content="PhpED Version 5.9 (Build 5921)">
<title></title>
<link rel="shortcut icon"  href="">
<script type="text/javascript">
    function dis_confirm()
    {
        var ans = confirm("Are you Sure want to delete?")
        if(ans == true)
        {
            alert("Good");
        }
        else
        {
            alert("Bad");
        }
        
    }
</script>
</head>
<body>

<form name="frm">
    <input type="button" value="confirm" onclick="dis_confirm()">
</form>

</body>
</html>