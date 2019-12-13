<?php


function get_sum($arr) {
$sum = 0;

for ($i = 0; $i <= count($arr);$i++) 
	if ($i%=0) $sum += $arr[$i]
    return $sum;

}

$arr = [2,4,5]; 

echo get_sum($arr). PHP_EOL; 


// function get_sum($arr) {
//     $sum = 0;
//     if ($i%=0) {
//     	foreach($arr as $i)
//         $sum += $i;
//     return $sum;# code...
//     }
// }
// $arr=[1,2,5,4];
// echo get_sum($arr);  
// // 

