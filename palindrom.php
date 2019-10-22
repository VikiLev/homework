<?php


for($i = 1; $i<=1000; $i++) {
$mas = range(1, $i);

foreach ($mas as $value) {
	if (strrev($value) == $value){
		$mas_rez[] = $value;
	}
}
}
print_r(end($mas_rez));