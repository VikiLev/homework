
<?php

function open($path){
	$doc = fopen("$path", "r");
	return ($doc);

}

function write($path){
	$doc2 = fopen("$path","w");
	n = 1;
	$doc = open(1.txt);
	while (!feof($doc)){
		$str= fgets($doc);
		if ($n % 2!= 0){

		fwrite($doc2, $str);
		
	}
$n++
}
write("2.txt");


?>