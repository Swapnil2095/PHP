<?php

echo 'Multidimesiona Array ' . '</br>';

/*

Students

Name Age Weight

Amit  20  50
Sagar 25  55
Neha  30  60
Priti 35  65

*/

$Students = array(array('Amit',20,50),
				  array('Sagar',25,55),
				  array('Neha',30,60),
				  array('Priti',35,65)
				  );

print_r ($Students);
echo '</br>';


echo $Students[0][0] .'->'. $Students[0][1] .'->'.$Students[0][2] .'</br>';
echo $Students[1][0] .'->'. $Students[1][1] .'->'.$Students[1][2] .'</br>';
echo $Students[2][0] .'->'. $Students[2][1] .'->'.$Students[2][2] .'</br>';
echo $Students[3][0] .'->'. $Students[3][1] .'->'.$Students[3][2] .'</br>';


$Students = array(array('Name'=>'Amit','Age'=>20,'Weight'=>50),
				  array('Name'=>'Sagar','Age'=>25,'Weight'=>55),
				  array('Name'=>'Neha','Age'=>30,'Weight'=>60),
				  array('Name'=>'Priti','Age'=>35,'Weight'=>65)
				  );

print_r ($Students);
echo '</br>';


echo $Students[0]['Name'] .'->'. $Students[0]['Age'] .'->'.$Students[0]['Weight'] .'</br>';
echo $Students[1]['Name'] .'->'. $Students[1]['Age'] .'->'.$Students[1]['Weight'] .'</br>';
echo $Students[2]['Name'] .'->'. $Students[2]['Age'] .'->'.$Students[2]['Weight'] .'</br>';
echo $Students[3]['Name'] .'->'. $Students[3]['Age'] .'->'.$Students[3]['Weight'] .'</br>';




?>
