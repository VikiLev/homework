<?php

$myfile = fopen("a.txt", "r");
echo fgets($myfile);

fclose($myfile);

$file2 = fopen("b.txt", "w");
$str = "hello";
fwrite($file2, $str);
echo fgets($file2);

fclose($file2);


?>