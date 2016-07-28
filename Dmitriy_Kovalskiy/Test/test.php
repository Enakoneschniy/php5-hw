<?php
/*****************
echo "Hello world!"."<br>";
// const
const Pi = 3.14;
$a = Pi + 1;
echo $a."<br>";
// const
define('Avagadro',8);
echo Pi + $a + Avagadro."<br>";
//types
$b = "string";
$c = True;
$d = 32.97676;
$f = 1;
echo gettype($d)."<br>";
// new types
$e = (bool)$d;
$t = "hello";
$g = $a." world!";
echo $g."<br>" ;
$a /= 4.14;
echo $a."<br>";
$x = $d !== $f;
echo $x."<br>";
$x = is_string($b);
echo $x."<br>";
***********************************/
/*$a = 1;
$b = 2;
$c = 3;
if ($a > $b || $a == 0 || $c > 5 && $a < 2 && $c > 0) {
    echo " A bigger than B";
}
else {
    echo "Good job";
}
*/
$a = 1;
$b = 2;
$c = 3;
echo $a < $b && $a ==1 || $c >4 && $a > 2 ? 'good' : 'bad';
?>

