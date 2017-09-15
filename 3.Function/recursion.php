<?php

const BR ='     ';

function recursion($number){

    if($number<=10){
        //echo $number.BR;  // increasing order 0 to 10
        recursion($number+1);
        echo $number . BR;  // decreasing order 10 to 0
    }
}

recursion(0);