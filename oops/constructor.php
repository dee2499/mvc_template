<?php
  class a
  {
      function __construct()
      {
          echo "In base class constructor....";
      }
  }
  
  class b extends a
  {
      function __construct()
      {
          parent::__construct();
          echo "in subclass construct";
      }
  }
  
  $a= new a();
  $b= new b();
?>
