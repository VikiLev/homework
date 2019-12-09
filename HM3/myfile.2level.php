<?php

$file = fopen("a.txt", "r+");

while (!feof($file))
{
	$line = fgets($file);
	$num += 1;
	$x = iconv_strlen($line);
	echo $line;

}

$file = fopen("a.txt", "r");

while (!feof($file))
{
	$line = fgets($file);
	$x = (iconv_strlen(trim($line)));
	echo ($x);

}



fclose($file);

$file = fopen("a.txt", "r+");
$vsego =iconv_strlen(file_get_contents("a.txt"));
//echo ($vsego);

$fp = file("a.txt");
$numstrok = count($fp);
//echo $numstrok;

$srednee = $vsego/ $numstrok;
//echo $srednee;

fclose($file);





//while (!feof($file1))
//{
	
	//if ($n < Sx)
//{
	//echo "$line1 / $num ";
	//fwite ($max, $line1);
//}
//}





?>