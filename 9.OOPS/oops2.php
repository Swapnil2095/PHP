<?php
class Fruit {
  public $count = 3;
  public $type;
}

$apple = new Fruit();
$apple->type = "apple";
print $apple->count."\n"; // 3
print $apple->type."\n";  // apple


?>