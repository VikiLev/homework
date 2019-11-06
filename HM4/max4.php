<?php
$mas = [1,2,3,4,5,6,7,8,9];

function number($mas){
	$var = 0;
	foreach ($mas as $value) { //перебираем 
	if ($value > $var){
	$var = $value;

	}
	
	}
	return $var;
}
$max = number($mas);
echo $max;