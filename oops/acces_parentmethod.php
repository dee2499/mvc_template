<?php
  class myclass
  {
      public function __construct()
      {}
      
      public function mypublic()
      {}
      
      private function myprivate()
      {}
      
      protected function myprotected()
      {} 
      
      function display()
      {
          $this->myprivate();
          $this->myprotected();
          $this->mypublic();
      }
  }
  
  class myclass2 extends myclass
  {
      function display2()
      {
          $this->myprivate();
          $this->myprotected();
          $this->mypublic();
      }
  }
  
  
  //$myclass = new myclass();
  
  //$myclass->mypublic();
  //$myclass->myprivate();
  //$myclass->myprotected();
  //$myclass->display();
  
  
  $myclass2 = new myclass2();
  
  $myclass2->mypublic();
  //$myclass2->myprivate();
  //$myclass2->myprotected();
  $myclass2->display();
?>
