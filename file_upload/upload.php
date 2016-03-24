<?php
mysql_connect("localhost","root","");
mysql_select_db("db_image");

    if(isset($_REQUEST['submit']))
    {
    
        if((($_FILES['file']['type'] == "image/gif") || ($_FILES['file']['type'] == "image/jpeg") || ($_FILES['file']['type'] == "image/pjpeg")) && ($_FILES['file']['size'] < 2000000))
        {
            if($_FILES['file']['eror'] > 0)
            {
                echo "Return Code:" . $_FILES['file']['error'] . "<br/>";
            }
            else
            {
                echo "Upload " . $_FILES['file']['name'] . "<br/>";
                echo "Type " . $_FILES['file']['type'] . "<br/>";
                echo "Size " . ($_FILES['file']['size']/1024) . "KB<br/>";
                echo "TempFile " . $_FILES['file']['tmp_name'] . "<br/>";
                
                if(file_exists("upload/" . $_FILES['file']['name']))
                {
                    echo $_FILES['file']['name'] . "<br/>Already Exists...<br/>"; 
                }
                else
                {
                    move_uploaded_file($_FILES['file']['tmp_name'], "upload/" . $_FILES['file']['name']);
                    $i = "upload/" . $_FILES['file']['name'];
					$ins = "insert into tbl_image (image_path) values ('$i')";
                }
                
            }
        }
        else
        {
            echo "invalid file........";
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
        <tr>
            <td>Upload</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="upload"></td>
        </tr>
    </table>
</form>
</body>
</html>