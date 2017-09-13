<?php

const BR = '\n';
$dir = 'S:\Education\Videos\Learning\PHP\CleverTechie\PHP\OOPS';

echo $dir.BR;

$files = scandir($dir);

print_r($files); 

function pre_r($array){
    echo '<pre>';
    print_r($array); 
    echo '</pre>';
}

pre_r($files);