<?php
        class Shape {
          public $hasSides = true;
        }
        
        class Square extends Shape {
        
        }
        
        $square = new Square();
        // Add your code below!
        if (is_a($square,"Square") ) {
          echo "I have sides!"."\n";
        }

        if (is_a($square,"Shape") ) {
          echo "I have sides!"."\n";
        }
?>        