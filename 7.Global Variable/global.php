<?php 

$x = 75; 
$y = 25;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}

addition(); 
echo $z; 
echo "\n";

print_r($GLOBALS['_SERVER']['OS']);
echo "\n";
echo "PHP_SELF = ".$_SERVER['PHP_SELF'];
echo "\n";
echo "SERVER_NAME = ".$_SERVER['SERVER_NAME'];
echo "\n";
echo "HTTP_HOST = ".$_SERVER['HTTP_HOST'];
echo "\n";
echo "HTTP_REFERER = ".$_SERVER['HTTP_REFERER'];
echo "\n";
echo "HTTP_USER_AGENT = ".$_SERVER['HTTP_USER_AGENT'];
echo "\n";
echo "SCRIPT_NAME = ".$_SERVER['SCRIPT_NAME'];


?> 