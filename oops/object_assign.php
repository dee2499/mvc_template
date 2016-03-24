<?php
    
    $instance->var = "Hello...";
    
    $assign = $instance;
    $reference = &$instance;
    $instance = NULL;
    
    var_dump($instance);
    var_dump($reference);
    var_dump($assign); 
  
?>
