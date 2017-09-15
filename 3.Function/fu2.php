<?php
function foo() 
{
  function bar() 
  {
    echo "I don't exist until foo() is called.<br>";
  }
}

/* We can't call bar() yet
   since it doesn't exist. */

   echo 'foo call -> '.'<br>';
foo();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */
   echo 'bar call -> '.'<br>';
bar();

?>