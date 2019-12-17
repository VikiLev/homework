<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


//include '1.php';
//include '2.php';
//include '3.php';
//include '4';


$pen = new pen('pen', 'blue');
$pensil = new pensil('pensil', 'gray');



echo $pen->office_tools() . $pen->newStationery();
echo $pensil->office_tools() . $pensil->newStationery();