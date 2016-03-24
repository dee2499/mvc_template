<?php
  class bar
  {
      public function test()
      {
          $this->testprivate();
          $this->testpublic();
      }
      
      private function testprivate()
      {
          echo "bar::testprivate\n";
      }
      
      public  function testpublic()
      {
          echo "bar::testpublic\n";
      }
  }
  
  class foo extends bar
  {
      public function testpublic()
      {
          echo "foo::testpublic\n";
      }
      
      public function testprivate()
      {
          echo "foo::testprivate\n";
      }
  }
  
  $foo = new foo();
  $foo->test();
?>
