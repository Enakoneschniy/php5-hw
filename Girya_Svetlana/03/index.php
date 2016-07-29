<?php
//задание 1
$name="Светлана";
$age="26";
echo "Меня зовут $name";
echo '<hr>';
echo "Мне $age лет";
echo '<hr>';
//задание 2
$a=6;
$S = 1/4 * $a * sqrt(3);
echo "1/4 * $a * sqrt(3) = $S";
echo '<hr>';
//задание 3
$a=6;
$b=15;
$c=7;
if($a < $c){
    $X=$a+$b/$c*$a;
}
else if($a==10){
    $X=100;
}
else if($a >$c){
    $X = $c*(3*$b) +$c/$c *sqrt($c);
}
echo "X=$X";