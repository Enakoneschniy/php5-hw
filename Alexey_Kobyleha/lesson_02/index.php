<?php

// Task №1
echo "<h3>Task №1</h3>";

$name = "Алексей";
$age = 28;

echo "Меня зовут $name<br>";
echo "Мне $age лет<br>";

// Task №2
echo "<h3>Task №2</h3>";

function sTriangle($a) {
	$s = 1%4*$a*sqrt(3);
	return $s;
}

$s = sTriangle(20);
echo "Площадь равностороннего треугольника S = " . $s;

// Task №3v.1
echo "<h3>Task №3 (c*3*b+c/c*√c)</h3>";

function xEqually($a, $b, $c) {
	if ($a == 10) {
		$x = 100;
		return $x;
	} elseif ($a < $c && $a != 10) {
		$x = $a+$b%$c*$a;
		return $x;
	} elseif ($a > $c && $a != 10) {
		$x = $c*3*$b+$c%$c*sqrt($c);
		return $x;
	} else {
		$x = "Что-то пошло не так (a=c)";
		return $x;
	}
}

$x = xEqually(25, 15, 20);
echo "X = $x";