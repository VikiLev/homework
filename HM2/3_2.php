<?php

//echo "Give me ticket\n";
//$handle = fopen ("php://stdin","r");
//$mark = fgets($handle);

//switch ($ticket) {
    //case economy:
        //echo "For what?";
        //break;
    //case Business:
        //echo "COOL!!! ";
        //break;
    //case first class:
        //echo "am I sleeping? :)";
        //break;
    
//} 

//echo "\n";





echo "Give me ticket\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if ($ticket = economy) {
    echo "For what?";
} elseif ($ticket = Business) {
    echo "COOL!!!";
} elseif ($ticket = first) {
    echo "am I sleeping?";
} else echo "wake up and sing";

echo "\n";
