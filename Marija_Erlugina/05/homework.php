<?php

// ***************** Задача 1 ********************
echo "<p>Задача 1 </p>";

$n = 20;
$number = 0;

for($i = 1; $i <= $n; $i+=3) {
    echo $i."<br>";
    $number += $i;
}

echo $number+$n;

// ***************** Задача 2 ********************
echo "<p>Задача 2 </p>";
echo "<hr>";
$n = 9;
$arr = [];

for($i = 1; $i <= $n; $i++) {
    $arr[$i]= $i*$i;
}
echo "<pre>";
var_dump($arr);
echo "</pre>";

// ***************** Задача 3 ********************

echo "<hr>";
echo "<p>Задача 3 </p>";
$arr1 = [];

for($i = 0; $i <= $n; $i++) {
    if($i%2==0){
        $arr1[$i]= 0;
    }
    else {
        $arr1[$i]= 1;
    }
}
echo "<pre>";
var_dump($arr1);
echo "</pre>";

// ***************** Задача 4 ********************
echo "<hr>";

echo "<p>Задача 4 </p>";

print_r(array_count_values($arr1));


$n = 10;
$number = [];

for($i = 1; $i <= $n; $i++) {

    $number[] = rand(-20, 20);

}

var_dump($number);
$flag = false;

for ($i=0;$i<$n;$i++){
    for ($j=$i+1;$j<$n;$j++) {
        if($number[$i] == $number[$j]) {
            $flag = true;
            break;
        }
    }
    if($flag== true){
        break;
    }
}
echo $flag==true ? "yes" : "no";



// ***************** Задача 5 ********************
echo "<hr>";

echo "<p>Задача 5 </p>";

//$arr2 = [5,8,7,11,2,3,4,5,8,8];
//
//// Встроенная функция для удаления повторяющихся элементов array_unique
//$arrNew = array_unique($arr2); // новый массив без дубликатов
//
//print_r($arrNew);


$arInp = [1,2,3,4,4,5,2];
$arOut = [];

foreach ($arInp as $item) {
    if (in_array($item, $arInp)) {
        $arOut[] = $item;
    }
}

var_dump($arOut);

// ***************** Задача 6 ********************

echo "<hr>";

echo "<p>Задача 6 </p>";

$arr3 = [5,8,-9,11,-2,3,4,5,-8,8];

foreach ($arr3 as $value){
    if($value<0){
        $arr3[$i+1] = 0;
    }
}
echo "<hr>";
print_r($arr3);




//print_r($arr2);



















