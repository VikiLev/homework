<?php

$array1 = [hello, element, Viki];

$array2 = [Y, world, Victoriaaa];
$array3 = [Yt, worldt, Victoriaattt];

function difference($array1, $array2){

for($i=0; $i< count($array1); $i++){
    $key1 = iconv_strlen($array1[$i]);//находим длину каждого элемента1 массива
    $key2 = iconv_strlen($array2[$i]);//находим длину каждого элемента2 массива
    $diff = abs($key1 -$key2);// находим разницу по каждому ключу по модулю
    //echo $diff. PHP_EOL;
}

echo ($diff);
}
difference($array1, $array3);



// $key1_0 = iconv_strlen($array1[0]);
// $key1_1 = iconv_strlen($array1[1]);
// $key1_2 = iconv_strlen($array1[2]);

// $key2_0 = iconv_strlen($array2[0]);
// $key2_1 = iconv_strlen($array2[1]);
// $key2_2 = iconv_strlen($array2[2]);



// $diff0 = abs($key1_0 - $key2_0);
// $diff1 = abs($key1_1 - $key2_1);
// $diff2 = abs($key1_2 - $key2_2);

// echo max($diff0, $diff1, $diff2);

 












// function string($array1)
// {
//  foreach ($array1 as $value) {
//  $s = iconv_strlen($value);
//   if ($s > $max) { 
//    $maxstr = $value;
//    $max = $s;
//   }
//  }
//  echo "$maxstr";
// }



// string($array1);




