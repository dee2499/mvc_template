<?php
  class simpleclass
  {
      public $var = "Hello Calss...";
      
      public function dispaly()
      {
          echo $this->var;
      }
  }
  
  $s= new simpleclass();
  $s->dispaly();
  
?>
