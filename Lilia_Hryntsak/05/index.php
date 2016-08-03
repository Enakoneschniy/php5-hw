<?php
//массивы
$arNumbers = array(1,2,3,4,5,6,7,8,9);
//$arNumbers = [1,2,3,4,5,6,7,8,9];

//echo "<pre>";
    var_dump($arNumbers);
//echo "</pre>";

echo sizeof($arNumbers);
echo "<br>";
echo count($arNumbers);

echo "<hr>";
//обращение к элементу массива
echo $arNumbers[6], $arNumbers[3];

echo "<hr>";
//добавление в массив
$arNumbers[]=10;
var_dump($arNumbers);

$arNumbers[12] = 213;

var_dump($arNumbers);

$arTest[145] = 34;

var_dump($arTest);

$arTest[] = 333;

var_dump($arTest);

$arTest[0] = 343;

var_dump($arTest);

$arTest[] = 6577;

var_dump($arTest);

$arTest["HELLO"] = "Hello World";
echo"<pre>";
var_dump($arTest);
echo"</pre>";

$arSimple = [
    0 => "Hello",
    4 => 456,
    "key" => 'Example'
];
var_dump($arSimple);

$index = 10;

$arSimple[$index] = "sdsds";

var_dump($arSimple);

echo "<hr>";

$size = 10;
$arTemp = [];
for ($i = 0; $i < $size; $i++){
    $arTemp[$i] = rand(-100, 100);
}

var_dump($arTemp);

echo "<hr>";

$arSimple = [
    0 => "Hello",
    4 => 456,
    "key" => 'Example',
    "key1" => 'Example1',
    "key2" => 'Example2'
];

foreach ($arSimple as $key => $value){
    echo $key. " : ".$value. "<br>";
}

foreach ($arSimple as $key => $value){
    $arSimple[$key] = rand(-10, 10);
}
var_dump($arSimple);

foreach ($arSimple as &$value){
    $value = rand(-10, 10);
}
var_dump($arSimple);

echo "<hr>";
//Многомерные массивы

$arAssoc = [
    'Users' => [
        'Вася',
        'Петя',
        'Леха'
    ],
    'ITEMS' => [
        "dfdfd",
        'sfsdf',
        'sdfsdf'
    ],
    'SOME_KEY' => "lalalala"
];
echo"<pre>";
var_dump($arAssoc);
echo"</pre>";

echo "<hr>";
$arUsers = [
    [
        'NAME' => 'Vasya',
        'EMAIL' => 'vasya@gmail.com'
    ],
    [
        'NAME' => 'Petya',
        'EMAIL' => 'petya@gmail.com'
    ],
    [
        'NAME' => 'Olga',
        'EMAIL' => 'olga@gmail.com'
    ]
];
echo"<pre>";
var_dump($arUsers);
echo"</pre>";

echo $arUsers[0]['NAME'];

echo "<hr>";

foreach ($arUsers as $user){
    echo $user['NAME'], " : ".$user['EMAIL']."<br>";
}