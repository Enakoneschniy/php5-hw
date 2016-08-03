<?php
// массивы

$arNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
//$arNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo "<pre>";
    var_dump($arNumbers);
echo "</pre>";
echo sizeof($arNumbers);
echo"<br>";
echo count($arNumbers);
echo "<hr>";
echo $arNumbers[4];
//adding to array
echo "<hr>";
$arNumbers [14]=199;
echo "<pre>";
var_dump($arNumbers);
echo "</pre>";

$arTest["HELLO"]= "Hello world";
echo "<pre>";
var_dump($arTest);
echo "</pre>";

echo $arTest ["HELLO"];
echo "<hr>";
$arSimple=[
    0=>"hello",
    4=>456,
    "key"=> 777,
];
echo "<pre>";
var_dump($arSimple);
echo "</pre>";

echo "<hr>";
$size = 10;
$arTemp =[];
for ($i=0;$i<$size; $i++){
    $arTemp[$i] = rand(-100,100);
}
echo "<pre>";
var_dump($arTemp);
echo "</pre>";
echo "<hr>";
$arSimple=[
    0=>"hello",
    4=>456,
    "key"=> 777,
    "key1"=> 111,
    "key2"=> 555,
];
foreach ($arSimple as $key=>$value){
    echo $key.":".$value."<br>";
}
echo "<hr>";
//многомерный массив
$arBlabla=[
    'USERS'=>[
       'John',
       'Bill',
       'Cole',
    ],
    'ITEMS'=>[
        'tre',
        'hjk',
        '5'
    ],
    'SOME_KEY'=>"lalalal"

];
echo "<pre>";
var_dump($arBlabla);
echo "</pre>";








