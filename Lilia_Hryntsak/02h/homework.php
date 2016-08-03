<?php
//задача 1
$name = Lilia;
$age = 16;
echo "Меня зовут $name";
echo"<br>";
echo "Мне $age лет.";
echo"<hr>";
//задача 2
$a=16;
$S=sqrt(3)/4*($a*$a);
echo $S;
echo"<hr>";
//задача 3. Часть 1
$a = 1;
$b = 2;
$c = 3;
$x = $a + $b / $c * $a;
if ($a < $c) {
    echo "$x";
}
echo"<hr>";
//Часть 2
$a = 10;
$x = 100;
if ($a = 10) {
    echo "$x";
}
echo"<hr>";
//Часть 3
$a = 2;
$b = 3;
$c = 1;
$x = $c * 3 * $b + $c / $c * sqrt($c);
if ($a > $c) {
    echo "$x";
}
?>