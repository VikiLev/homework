<?php

$arr =[2, 4, 5, ";", 3,  2];

//print_r($arr);
$key = array_search(";", $arr);// находим под каким ключем символ ; номер равен и колву элементов до ;
//echo $key;

$summa = array_sum(array_slice($arr, 0, $key)); // находим сумму всех элементов до символа ;


//echo $summa;
$del = $summa/($key);// ищем скольо будет сумму символов до ; поделить на кол-во элементов;l 3.666
//echo $del;

$del1 = (int) $del;//отбрасиваем дробную часть; 3
echo $del1 . PHP_EOL;

$s = ($del1*$key);//
$del2 = $summa-$s;
echo $del2 . PHP_EOL; //2

$end = end($arr);
//echo $end;



//echo $arr[($key+1)];

If (($end == $del2) and ($arr[($key+1)]==$del1)) echo "True";// проверяем если в последних 2х элементах массива значения делителей выводим True
else echo "False";