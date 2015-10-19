<?php
    error_reporting(0);
    if(isset($_REQUEST['submit']))
    {
    while(list($key,$value) = each($_FILES['image']['name']))
    {
        if(!empty($value))
        {
            $filename = $value;
            $filename = str_replace(" ","_",$filename);
            $add = "upload/$filename";
            copy($_FILES['image']['tmp_name'][$key],$add);
            chmod("$add",0777);
        }
    }
    }
?>
<html>
<head>
<meta name="generator" content="PhpED Version 5.9 (Build 5921)">
<title></title>
<link rel="shortcut icon"  href="">
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <table align="center" border="1">
        <?php 
        $maxno = 4;
        for($i=0;$i<$maxno;$i++)
        {
        ?>
        <tr>
            <td>Image</td>
            <td><input type="file" name="image[]"></td>
        </tr>    
        <?php 
        }
        ?>
        <tr>
            <td><input type="submit" name="submit" value="Add Image"></td>
        </tr>
    </table>
</form>
</body>
</html>
