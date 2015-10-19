<?php
ob_start();
  session_start();
  
  if(isset($_SESSION['user']))
  {
      echo "Welcome " . $_SESSION['user'];
  }
  else
  {
      header("location:login.php");
  }
?>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <a href="logout.php">Logout</a>
    </body>
</html>

