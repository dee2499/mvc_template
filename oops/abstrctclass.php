<?php
  abstract class abc
  {
      abstract protected function getvalue();
      abstract protected function prefix($value);
      
      public function printvalue()
      {
          echo $this->getvalue() . "\n";
      }
  }
  
  class c1 extends abc
  {
      protected function getvalue()
      {
          return "hello...";
      }
      
      public function prefix($value)
      {
          return "{$value}hy....";
      }
  }
  
  class c2 extends abc
  {
      public function getvalue()
      {
          return "hello...";
      }
      public function prefix($value)
      {
          return "{$value}pratik";
      }
  }
  
  $c1 = new c1();
  $c1->printvalue();
  echo $c1->prefix("Foo") . "\n";
  
  $c2 = new c2();
  $c2->printvalue();
  echo $c2->prefix("Bar") . "\n";
?>

