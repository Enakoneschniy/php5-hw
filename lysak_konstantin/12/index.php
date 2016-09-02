<?php
include_once "init.php";

$sharik = new Dog("Шарик", 5, 'red', 'husky');
$bird = new Bird ("King", 10, "black and white", "Eagle", 2, "1000 km");
$elephant = new Elephant("Vasya", 15, "5000 kg", 2, 1);
$shark = new Shark ("Punisher",25, 3, "40 km/h", 300);
var_dump($sharik);
echo "<br>";
var_dump($bird);
echo "<br>";
var_dump($elephant);
echo "<br>";
var_dump($shark);


