<?php
function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);


echo '<br>';

function add($a, $b) {
    return $a + $b;
}

echo add(...[1, 2]);
echo '<br>';

$a = [1, 2];
echo add(...$a);
echo '<br>';

?>