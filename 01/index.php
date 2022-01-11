<?php
require_once 'classes/FirstClass.php';


/**
Классы ничто без объектов! Мы можем создать несколько объектов из класса. Каждый объект имеет все свойства и методы, определенные в классе, но они будут иметь разные значения свойств.

Объекты класса создаются с использованием new ключевого слова.

В приведенном ниже примере $apple и $banana являются экземплярами класса Fruit:

class Fruit {
// Properties
public $name;
public $color;

// Methods
function set_name($name) {
$this->name = $name;
}
function get_name() {
return $this->name;
}
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
 *
 */

$object1 = new FirstClass();
$object2 = new FirstClass();

/** ^ Здесь мы создали объект или екземпляр класса чтобы использовать наш класс */


var_dump($object1);
var_dump($object2);
