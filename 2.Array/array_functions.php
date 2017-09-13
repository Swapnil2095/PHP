<?php

$fav_bands = array();
array_push($fav_bands, "Maroon 5");
array_push($fav_bands, "Bruno Mars");
array_push($fav_bands, "Nickelback");
array_push($fav_bands, "Katy Perry");
array_push($fav_bands, "Macklemore");
echo "\n";
print "#Elements = ".count($fav_bands); // prints 5
echo "\n";
print($fav_bands);
echo "\n".$fav_bands;
echo "\n";
print_r($fav_bands);

echo "\n";

$array = array(5, 3, 7, 1);
sort($array);
print join(", ", $array);  //********
// prints "1, 3, 5, 7"

echo "\n";

$array = array(5, 3, 7 ,1);
rsort($array);
print join(":", $array);
// prints "7:5:3:1"

?>
