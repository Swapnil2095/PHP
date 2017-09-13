<?php

// Array

echo 'Array Represenatation'. '</br>';


$names = array('Amit','Swapnil','Sagar','Mark');

echo 'names[0] ='.$names[0]. '</br>';
echo 'names[1] ='.$names[1]. '</br>';
echo 'names[2] ='.$names[2]. '</br>';
echo 'names[3] ='.$names[3]. '</br>';

print_r ($names);
echo '</br>';
$names[4] = 'Neha';

print_r ($names);


echo '</br>';
$names[7] = 'Priyanka';

print_r ($names);
echo '</br>';
echo 'names[4] ='.$names[4]. '</br>';
echo 'names[5] ='.$names[5]. '</br>'; // error

?>
