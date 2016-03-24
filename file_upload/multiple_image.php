<?php
    error_reporting(0);
    while(list($key,$value) = each($_FILES['image']['name']))
    {
        if(!empty($value))
        {
            $filename = $value;
            $filename = str_replace(" ","_",'$filename');
            $add = "upload/$filename";
            copy($_FILES['image']['tmp_name'][$key],$add);
            chmod("$add",0777);
        }
    }                  
?>                           
<?php
    $max_no_image = 4;
    
    echo "<form method=post enctype=multipart/form-data>";
    echo "<table align=center border=1>";
    for($i=1;$i<=$max_no_image;$i++)
    {
     echo   "<tr>
            <td>Image</td>
            <td><input type=file name=image[]></td>
        </tr>";
    }
        echo "<tr>
            <td><input type=submit name=submit value=AddImage></td>
        </tr>";
    echo "</table>
</form>";

?>