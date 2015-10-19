<?php
  class a
  {
      function __construct()
      {
          echo "hello..";
          $this->name = "pratik";
      }
      
      function __destruct()
      {
          echo "destruct" . $this->name . "\n";
      }
  }
  
  
  $obj = new a();
  
?>
