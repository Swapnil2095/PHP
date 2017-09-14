<?php
const BR = "\n";

$animals = array
(
'Antelope' => 'Snorts',
'Bat' => 'Screeches',
'Bear' => 'Roars',
'Dolphin' => 'Clicks',
'Goose' => 'Honks',
'Vulture' => 'Screams'
);

foreach ($animals as $name => $sound)
    {
    //$name is key, $sound is value
    echo $name . '  ' . $sound.BR;
}
/* output:
    Antelope Snorts
    Bat Screeches
    Bear Roars
    Dolphin Clicks
    Goose Honks
    Vulture Screams
*/

echo BR;
foreach ($animals as $name => $sound)
    {
    //$name is key, $sound is value
    echo $name . ' ' . $animals[$name].BR;
}

echo BR;
foreach ($animals as $value)
    {
    echo $value.BR;
}
/* output:
    Snorts
    Screeches
    Roars
    Clicks
    Honks
    Screams
*/