<?php
// first task
$n= 10;
$number = [];
for ($i = 1; $i <= $n; $i+=3){
    $number[] =  $i;
}
echo "<pre>";
var_dump($number);
echo "</pre>";
echo "<hr>";
//second task
$n = 5;
$square = [];
for ($i = 0; $i <= $n; $i++){
    $square[] = $i*$i;}
echo "<pre>";
var_dump($square);
echo "</pre>";
echo "<hr>";
// thrid task
$n = 5;
$one_or_zero = [];
for ($i = 0; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        $one_or_zero[] = 0;
    } else {
        $one_or_zero[] = 1;
    }
}
echo "<pre>";
var_dump($one_or_zero);
echo "</pre>";
echo "<hr>";
//fourth task
$list_of_fruits = ["banana", "coconut", "strawberry", "melon", "banana"];
print_r (array_count_values($list_of_fruits));
echo "<hr>";
//fifth task
$x = [0,1,2,3,4,5,5,6,6,4,9,0,11];
print_r ( array_unique($x));
echo "<hr>";
//sixth task
$n = 10;
$double_number = [];
for ($i = 1; $i <= $n; $i++) {
    $double_number[] = rand(-$n, $n);

}
foreach($double_number as $key => $value){
    if($value > 0){
        $res[] = $value;
    }
    elseif($value < 0){
        $res[] = $value;
        $res[] = 0;

    }
}
echo "<pre>";
print_r($res);
echo "</pre>";
//seventh task
