<?php
      function addFive($num) { //pass by value
            $num += 5;
      }

      function addSix(&$num) { //pass by reference
            $num += 6;
      }

      $orignum = 10;
      addFive( $orignum );

      echo "Original Value is $orignum \n";

      addSix( $orignum );
      echo "Original Value is $orignum \n";


      function attach_String(&$str){

            $str .= '(Added)-> Second Part of String !!';
      }


      $str = 'First Part of String';
      attach_String($str);
      echo $str;