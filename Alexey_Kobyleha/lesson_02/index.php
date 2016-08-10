<!--Task 1-->

<h3>Task 1</h3>

<?php
$name = 'Алексей';
$age = 28;

echo 'Меня зовут ' . $name . '<br>';
echo 'Мне ' . $age . ' лет<br>';

?>

<!--Task 2-->

<h3>Task 2</h3>

<?php

function sTriangle($a)
{
    $s = 1 % 4 * $a * sqrt(3);
    return $s;
}

$s = sTriangle(20);
echo 'Площадь равностороннего треугольника S = ' . $s;

?>

<!--Task 3  X = (c*3*b+c/c*√c)-->

<h3>Task 3</h3>

<?php

function xEqually($a, $b, $c)
{
    if ($a == 10) {
        $x = 100;
        return $x;
    } elseif ($a < $c && $a != 10) {
        $x = $a + $b % $c * $a;
        return $x;
    } elseif ($a > $c && $a != 10) {
        $x = $c * 3 * $b + $c % $c * sqrt($c);
        return $x;
    } else {
        $x = 'A = C';
        return $x;
    }
}

$x = xEqually(25, 15, 20);
echo $x;

?>