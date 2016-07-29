<strong>   всякое разное с переменными </strong>

<?php
echo "<br>";
echo "<hr>";//new line

$a = 2;
echo $a,"<br>";
$b = 3;
echo $b,"<br>";
$sum = $b+$a;
echo "$sum = $b+$a","<br>";
echo '$sum = $b+$a',"<br>";
echo $sum;
echo "<hr>";//new line
echo $sum/$a,"<br>";
echo $sum*$a,"<br>";
echo "$sum/$b".gettype($sum),"<br>";
$d = $sum/$b;
echo $d,"<br>";
echo gettype($d),"<br>";
echo round($d,3),"<br>";
$d = round($d,2);
echo "$d".gettype($d),"<br>";


?>