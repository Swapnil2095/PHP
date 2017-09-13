<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43","Amit"=>"10");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "\n";
}

/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/

print_r($age);
asort($age); // 
aksort($age); // 
print_r($age);
//print($age);



?> 