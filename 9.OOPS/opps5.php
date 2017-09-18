<?php
 class Person {
          public $isAlive = true;
          
          function __construct($name) {
              $this->name = $name;
          }
          
          public function dance() {
            return "I'm dancing!";
          }
}

class Immortal extends Person {
  // Immortals never die!
  const alive = true;    //Note that constants do not start with $
}

// If true...
if (Immortal::alive) {
  echo "I live forever!";
}
// echoes "I live forever!"


?>