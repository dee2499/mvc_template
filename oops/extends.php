<?php
  class a
  {
      public $avar = "Hello....";
      
      public function adisplay()
      {
          echo $this->avar;
      }
  }
  
  class b extends a
  {
      public $bvar =  "Hy....";
      
      public function bdisplay()
      {
          echo $this->bvar;
      }
  }
  
  $b = new b();
  
  $b->bdisplay();
  $b->adisplay();
  
?>
