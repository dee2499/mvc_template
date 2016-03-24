<?php
  setcookie("user","pratik",time()+5);
  echo "cookie is set<br/>";
?>
<?php
    
    echo "Cokies' value is " . $_COOKIE['user'] . "<br/>";
?>
<?php
    
    if(isset($_COOKIE['user']))
    {
        echo "welcome " . $_COOKIE['user'] . "";
    }
    else
    {
        echo "welcome guest....."; 
    }
?>
