<?php
  
  class myclass
  {
      public $public = "Public";
      private $private = "private";
      protected $protected = "protected";
      
      function display()
      {
          echo $this->public;
          echo $this->private;
          echo $this->protected;
      }
      
  }
  
  
  $my = new myclass();
 
    //echo $my->public;
    //echo $my->protected;
    //echo $my->private;
    
    $my->display(); 

  
?>
