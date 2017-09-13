<?php
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

print_r ($a);
echo '<br>'; 
print_r ($b);
echo '<br>'; 

$c = $a + $b; // Union of $a and $b
echo "<br>Union of \$a and \$b: <br>";
var_dump($c);
echo '<br>';
print_r ($c);
echo '<br>'; 

$c = $b + $a; // Union of $b and $a
echo "<br>Union of \$b and \$a: <br>";
var_dump($c);
echo '<br>';
print_r ($c);
echo '<br>'; 

$a += $b; // Union of $a += $b is $a and $b
echo "<br>Union of \$a += \$b: <br>";
var_dump($a);
echo '<br>';
print_r ($a);
echo '<br>'; 
?>