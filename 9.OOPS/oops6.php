<?php

class Person {
  public static $isAlive = "Yep!"."\n";
  public static function greet() {
    echo "Hello there!"."\n";
  }
}

echo Person::$isAlive;
// prints "Yep!"
Person::greet();
// prints "Hello there!"


?>