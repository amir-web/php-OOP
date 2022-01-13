<?php

require_once 'classes/Car.php';

function debug($data){
    echo '<pre>'.print_r($data, 1).'</pre>';
}

//$spark = new Car();

//$spark->color = 'white';
/** ^ написали имя переменное потом символ (->) обращались к свойству класса и изменили значение*/



//$spark->year = '2018';
/** ^ Мы даже можем добавить свойство который нету (изначально не было) в классе из вне и можем использовать. Но использовать такой метод не рекомендуется*/

$cobalt = new Car('blue', 4, 250);
echo $cobalt->getCarInfo();