<?php  

echo 'Integers'.'<br>';

echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1
 
// Floats
echo '<br>'.'Floats'.'<br>';
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1
 
// Strings
echo '<br>'.'Strings'.'<br>';
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
 
echo "a" <=> "aa"; // -1
echo "zz" <=> "aa"; // 1
 
// Arrays
echo '<br>'.'Arrays'.'<br>';
echo [] <=> []; // 0
echo [1, 2, 3] <=> [1, 2, 3]; // 0
echo [1, 2, 3] <=> []; // 1
echo [1, 2, 3] <=> [1, 2, 1]; // 1
echo [1, 2, 3] <=> [1, 2, 4]; // -1
 
// Objects
echo '<br>'.'Objects'.'<br>';
$a = (object) ["a" => "b"]; 
$b = (object) ["a" => "b"]; 
echo $a <=> $b; // 0
 
$a = (object) ["a" => "b"]; 
$b = (object) ["a" => "c"]; 
echo $a <=> $b; // -1
 
$a = (object) ["a" => "c"]; 
$b = (object) ["a" => "b"]; 
echo $a <=> $b; // 1
 
// only values are compared
echo '<br>'.'only values are compared'.'<br>';
$a = (object) ["a" => "b"]; 
$b = (object) ["b" => "b"]; 
echo $a <=> $b; // 1

?>