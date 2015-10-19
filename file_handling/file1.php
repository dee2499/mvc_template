<?php
  $myfile = "test.txt";
  $f = fopen($myfile,'w');
  $str = "Pratik";
  fwrite($f,$str);
  fclose($f);
  
  echo "file created...";
?>
