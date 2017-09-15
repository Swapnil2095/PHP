<?php
class Foo
{
    static function bar()
    {
        echo "bar<br>";
    }
    function baz()
    {
        echo "baz<br>";
    }
}

$func = array("Foo", "bar");
$func(); // prints "bar"
$func = array(new Foo, "baz");
$func(); // prints "baz"
$func = "Foo::bar";
$func(); // prints "bar" as of PHP 7.0.0; prior, it raised a fatal error
?>