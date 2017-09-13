<?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
    
      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food); //***********
    
      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . "\n";
      }
    
      echo "I want my salad:"."\n";
    
      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . "\n";
      }
    
      echo "\n";
      echo "size of asso_array = ".count($salad);
      // Create your own array here and loop
      // through it using foreach!
    

?>