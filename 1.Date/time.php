<?php

$date = 'Tuesday February 14 2006 @ 10:39 am';

echo $date . '<br>';

$date = str_replace('@','',$date);
$date = strtotime($date);

echo date('d M Y',$date).'<br>';

echo date($date) . '<br>';
$second = date('second',$date);

echo $second . '<br>';
?>
