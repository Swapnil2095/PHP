<?php

function everyday($start_date, $end_date) { 
    for ($date = strtotime($start_date); $date <= strtotime($end_date); $date = strtotime("+1 day", $date)) {
         echo date("Y-m-d", $date)."\n"; 
    } 
} 
everyday("2017-01-01","2017-01-09");

?>