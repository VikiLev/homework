<?php


function string($array)
{
 foreach ($array as $value) {
 	$word = preg_split('//', $value, -1, PREG_SPLIT_NO_EMPTY);
 	foreach ($word as $a) {
 	if ($res[$a]) $res[$a]+=1;
 		else $res[$a] =1;


} 
}
print_r($res);
}

$array = [hello, element, Viki];

string($array);