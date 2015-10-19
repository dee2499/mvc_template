<?php
  session_start();
  $_SESSION['view'] = 'pratik';
  
?>
<?php
    echo "welcome " . $_SESSION['view'] . "<br/>"; 
?>
<?php
    if(isset($_SESSION['view']))
    {
        echo "Session is set...";
    }
    else
    {
        echo "Session not set...";
    }
?>
<?php
    unset($_SESSION['view']);
    session_destroy();
    echo "session destroy...";
?>