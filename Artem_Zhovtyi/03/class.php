<?php
// constant
define ('PI', 3.1415927);
const NAME = "Artem";

// call constant
echo PI,"<br>", NAME;
echo "<hr>";
// standart constant
echo __FILE__, "<br>", __DIR__;
echo "<hr>";

$t = "Bсем";
$$t ="привет!";
echo "$$t ".$$t."<br>";
echo "$t ${$t}<br>";
echo "$t $Bсем";
echo "<hr>";
$t1 = 96;
$t2 = &$t1;
echo "t1=$t1; t2=$t2<br>";
$t1=315;
echo "t1=$t1; t2=$t2<br>";
echo "<hr>";
$a=2;
$b=4;
if($a>$b){
    echo'$a>$b';
}else{
    echo"$a less than $b";
}
