<?php
include_once 'init.php';

// Dog extends Animal
$sharik = new Dog('Шарик', 4, 'Белый', 'Хаски');
echo $sharik->getInfo();
echo '<br>';

// Bird extends Animal
$parrot = new Bird('Гоша', 2, 'Желто-Красный', 'Новонёбные', true);
echo $parrot->getInfo();
echo '<br>';

// Cat extends Animal
$murzik = new Cat('Мурзик', 2,5, 'Черный', true, true);
echo $murzik->getInfo();
echo '<br>';