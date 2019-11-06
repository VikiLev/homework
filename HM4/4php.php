<?php


function string($array)
{
 foreach ($array as $value) {
 $s = iconv_strlen($value);
  if ($s > $max) { 
   $maxstr = $value;
   $max = $s;
  }
 }
 echo "$maxstr";
}

$array = [hello, element, Viki];

string($array);