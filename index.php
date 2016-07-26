
<h2> First task</h2>
<?php
$y = 5;
$S = 1/(4 * $y * sqrt(3));
echo "$S", "<br>";
// Second task
echo "<h2> Second task</h2>";
$name = "Dima";
$age = 19;
echo "My name is $name", "<br>";
echo "My age is $age", "<br>";
// Third task
echo "<h2> Thrid task</h2>";
$a = 1;
$b = 2;
$c = 3;
if ($a<$c)
    $x = ($a+$b)/($c*$a);
elseif ($a>$c)
    $x = ($c * 3 * $b + $c) / $c * sqrt($c);
if($a == 10)
    $x = 100;
echo $x;
?>
