<?php
//константы
define('PI' , 3.1415927);//способо 1
const NAME = "Lilia";//способ2
//обращение к константам
echo PI, "</br>", NAME;

echo"<hr>";
//стандартные константы
echo __FILE__, "<br>", __DIR__;
echo"<hr>";?>
<?php
$t="0";
echo"t=$t".gettype($t)."<br>";
$t+=2;
echo"t=$t".gettype($t)."<br>";
$t=$t+3.5;
echo"t=$t".gettype($t)."<br>";
$t=5+"5поросят";
echo"t=$t".gettype($t)."<br>";
$t=5.0+"5поросят";
echo"t=$t".gettype($t);?>
<?php echo"<hr>";
$t1=96;
$t2=&$t1;
echo"t1=$t1;
t2=$t2<br>";
$t1=315;
echo"t1=$t1;
t2=$t2";?>

<?php
//if
$a = 2;
$b = 3;
if($a > $b && $b == 3){
    echo "$a > $b";
}
else{
    echo "$a не больше $b";
}
?>

<?php
if ($a < $b):
    echo "$a > $b";
else:
    echo "$a не больше $b";
endif;

echo "<hr>";

//тернарный оператор

echo $a > $b ? 'true' : 'false';

echo "<hr>";

if(false)
    echo "true.......";
//else
    echo "false.....";
