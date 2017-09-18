<?php
//all strin function
$myname = "Swapnil Gaikwad";
echo "myname = ".$myname."\n";

$length = strlen($myname);
echo "length = ".$length."\n";

$uppercase = strtoupper($myname);
print "uppercase = ".$uppercase."\n";


$lowercase = strtolower($uppercase);
print "lowercase = ".$lowercase."\n";


$partial = substr($myname, 0, 3);
echo "first 3 letters = ".$partial."\n";

$position = strpos("emily", "i");     //***********
echo "position of i = ".$position."\n";

$position = strpos("emily", "j");   
echo "position of j = ".$position."\n";

?>