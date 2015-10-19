<?php
  class a
  {
      static $my = "hello...";
      
      function display()
      {
          return self::$my;
      }
  }
  
  class b  extends a
  {
        function avalue()
        {
            return parent::$my;
        }
  }
  
  
  echo a::$my;
  $a = new a();
  $a->my;
  
  echo b::$my;
  $b = new b();
  $b->avalue();                       
  
?>
