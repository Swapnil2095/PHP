<?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5);

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5);
            
        print_r($myArray);    
        echo "\n";
        print_r($myAssocArray);  
        echo "\n";  
        // This code will output "blue"...
        echo $myArray[1];
        echo "\n";
            
        // ... and this will also output "blue"!
        echo $myAssocArray['colour'];
?>