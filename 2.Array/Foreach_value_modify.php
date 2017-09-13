<?php
$numbers = array(1, 2, 3, 4, 5);
print_r( $numbers );
/* output:
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
*/
foreach ($numbers as &$number) {
    $number = $number * 2;
}
print_r( $numbers );
/* output:
Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
*/
unset( $number ); // break the reference with the last element