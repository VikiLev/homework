<?php

echo "how much?\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if ($number > 1000) {
    echo "expensive(";
} elseif (($number > 100) && ($number < 999)) {
    echo "good";
} else echo "really?";

echo "\n";
if ($number > 10000) echo "I'll go for a walk\n";