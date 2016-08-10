//Задача1

<?php
echo "<hr>";
$a = 50;
 $n = 0;

 for($i = 1; $i <= $a; $i+=3) {
        echo $i."<br>";
     $n += $i;
 }

 echo $n+$a;
echo "<hr>";

//Задача2

 $a = 12;
 $arr = [];

 for($i = 1; $i <= $a; $i++) {
        $arr[$i]= $i*$i;
    }
 echo "<pre>";
 print_r($arr);
 echo "</pre>";
echo "<hr>";

//Задача3

$arr1 = [];

 for($i = 0; $i <= $a; $i++) {
        if($i%2==0){
                $arr1[$i]= 0;
            }
     else {
                $arr1[$i]= 1;
            }
 }
 echo "<pre>";
 print_r($arr1);
 echo "</pre>";


//Задача4



