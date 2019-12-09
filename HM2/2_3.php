
<?php

echo "Give me ticket\n";
$handle = fopen ("php://stdin","r");
$mark = fgets($handle);

switch ($ticket) {
    case economy:
        echo "For what?";
        break;
    case Business:
        echo "COOL!!! ";
        break;
    case first:
        echo "am I sleeping? :)";
        break;
    
} 

echo "\n";
