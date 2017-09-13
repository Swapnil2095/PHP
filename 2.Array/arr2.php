<?php
$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");

print_r ($a);
echo '<br>'; 
print_r ($b);
echo '<br>';

var_dump($a == $b); // bool(true)
echo '<br>'; 
var_dump($a === $b); // bool(false)

?>