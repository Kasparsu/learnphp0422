<?php
$num = 29;
$name = 'Kaspar';
$string = "Tere minu nimi on $name ja ma olen $num aastat vana";
$string = 'Tere minu nimi on ' . $name . ' ja ma olen ' . $num .' aastat vana';
$array = array(1, 2, 3, 4, 5);
$array = [1, 2, 3, 4, 5];
$array[] = 6;
array_push($array, 7);
$array = ['name' => 'kaspar', 'age' => 29, 2 => 1, 2, 3, 15 => 4, 5];
var_dump($array);
foreach($array as $k => $v){
    var_dump($k . $v);
}
