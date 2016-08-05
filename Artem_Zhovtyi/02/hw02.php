<?php
//Задача 1

$myName = "Artem";
$myAge = 28;
echo "Меня зовут $myName<br>";
echo "Мне $myAge лет";

//Задача 2
echo"<hr>";
$a=5;
$x=(1/4)*pow($a, 2)*sqrt(3);
echo "$x";

// Задача 3
echo"<hr>";
$a=7;
$b=15;
$c=9;
if ($a<$c){
    $x=$a+$b/$c*$a;
}
elseif($a<$c || $a>$c &&$a===10){
    $x=100;
}
else {
    $x=$c*3*$b+$c/$c*sqrt($c);
}
echo "$x";
