<?php

define('PI', 3.14);

const NAME = "Evgeniy";


echo PI,"<br />", NAME, "<br />";  // обращение к константам

echo __FILE__, "<br />";  // стандартные константы
echo __DIR__, "<br />";
echo __LINE__;


$t="0";
echo"t=$t".gettype($t)."<br>";
$t+=2;
echo"t=$t".gettype($t)."<br>";
$t=$t+3.5;
echo"t=$t".gettype($t)."<br>";
$t=5+"5поросят";
echo"t=$t".gettype($t)."<br>";
$t=5.0+"5поросят";
echo"t=$t".gettype($t)."<br>";


$t="Всем";//переменнойtприсваиваемзначение"Всем"
$$t="привет!";//Переменной"Всем"присваиваемзначение"привет!"
echo "$$t ".$$t."<br>";
echo "$t ${$t}<br>";
echo "$t $Всем";

//**********************

echo "<hr>";

$t1 = 96;

$t2= &$t1;

$t3= $t1;

echo "t1 = $t1; <br> t2 = $t2 <br>";

$t1 = 315;

echo $t2 . "- t2, а t3 равно " . $t3;





$a = 2;
$b = 5;

if ($a < $b) {
    echo '<hr>';
    echo '$a < $b <br>';
    echo '<hr>';
    echo "$a < $b";
}


if ( $a > $b xor $b == 3 ) {
    echo "True";
}
else {
    echo "False";
}

echo "<hr>";

if ($a < $b):

    echo "gfdgdgf";

else :

    echo "fd";

    endif;

echo "<hr>";

echo $a < $b ? 'true' : 'false';
















