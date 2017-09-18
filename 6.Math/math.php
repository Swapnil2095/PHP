<?php

// Round pi down from 3.1416...
$round = round(M_PI);
print $round;  // prints 3

echo "\n";
// This time, round pi to 4 places
$round_decimal = round(M_PI, 4);
print $round_decimal; // prints 3.1416

echo "\n";

// prints a number between 0 and 32767
print rand();
echo "\n";
// prints a number between 1 and 10
print rand(1,10);
?>