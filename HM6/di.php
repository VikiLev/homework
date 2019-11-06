
<?php

$handle = fopen ("php://stdin","r");
$h = fgets($handle);

if($h > 0 && $h % 2!==0){
for($y=1; $y<=$h; $y=$y+2){
	$probel = floor(($h-$y)/2);
    echo str_repeat(' ',$probel);
    for($x=1; $x<=$y; $x++){
        
        echo "*";
    }
    echo "\n";
    
}

for($y=$h-2; $y>=1; $y=$y-2){
	$probel = floor(($h-$y)/2);
    echo str_repeat(' ',$probel);
    for($x=$y; $x>=1; $x--){
 
        echo "*";
    }

    echo "\n";
    
};
}
else echo "error";