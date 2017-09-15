<?php
function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.<br>";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
?>