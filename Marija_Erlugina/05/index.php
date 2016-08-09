
<?php

    //******************************************
    //***************** Массивы ****************
    //******************************************

    $arNumbers = array(1,2,3,4,5,6,7,8,9);  // старый способ

    // $arNumbers = [];   --- новый способ

    echo "<pre>"; // используется в разработке для структуры кода

        var_dump($arNumbers); // выводит массив, стандартная функция. Выводит типы !!!!!!!!!!!!!
    echo "</pre>";

    echo sizeof($arNumbers);
    echo "<br>";
    echo count($arNumbers);
    echo "<hr>";

    echo $arNumbers[5], $arNumbers[2];

    echo "<hr>";

    // Добавление в массив

    $arNumbers[] = 10;

    var_dump($arNumbers);


    $arNumbers[12] = 213;

// Если массив начинается не с 1-го элемента, то в дальнейшем элементы будут добавляться
// после этого индекса. Индесы в ПХП не идут по порядку.
// Элементы с массивами добавляются в конец, а без индексов - берётся самый большой индекс
// и к нему добавл. 1 --> новый индекс для нового элемента.

$arTest = [];
$arTest["HELLO"] = "Hello World";

echo $arTest["HELLO"];

//**********************************************

echo "<hr>";

$arSimple = [
    0 => "Hello",
    4 => 456,
    "key" => "Example"
];

var_dump($arSimple);


$ind = 10;
$arSimple[$ind] = "sdsdsd";
echo "<hr>";

var_dump($arSimple);


//*************************************************
//*************************************************

$size = 10;

$arTemp = [];

echo "<hr>";

for ($i = 0; $i < $size; $i++){
    $arTemp[$i] = rand(-100,100);
}

var_dump($arTemp);

// ****************************

$arSimple = [
    0 => "Hello",
    4 => 456,
    "key" => "Example",
    "key2" => "Example",
    "key1" => "Example"
];

foreach ($arSimple as $key => $value) {
    //echo $key." : ".$value."<br>";
  //  echo $arSimple[$key] = rand(-10,10);
}

echo "<br>";

var_dump($arSimple);

echo "<br>";

foreach ($arSimple as &$value) {
    //echo $key." : ".$value."<br>";
    echo $value = rand(-10,10);
}
echo "<br>";
var_dump($arSimple);


echo "<hr>";

// Многомерные массивы

$arAssoc = [
    'USERS' => [
        'Вася',
        'Petia',
        'Lioha'
    ],
    'ITEMS' => [
        "huhuhu",
        "ftftfyy0"
    ],
    'SMTH' => "lalala"
];

var_dump($arAssoc);

echo "<hr>";
echo "<hr>";

$arUsers = [
    [
      'Name' => 'Vasia',
        'Email' => 'vasia@lo.lo'
    ],
    [
        'Name' => 'Petia',
        'Email' => 'petia@lo.lo'
    ],
    [
        'Name' => 'Olga',
        'Email' => 'olga@lo.lo'
    ]
];

echo "<pre>";
print_r($arUsers);
echo "</pre>";


echo "<br>";

echo $arUsers[0]['Name'];

echo "<br>";

foreach ($arUsers as $user) { // $user -- это массив; всегда VALUE по дефолту
    echo $user['Name']." : ".$user['Email']."<br>";
}

?>










<table border="1" cellspacing="0">

    <?php
    $size = 10;

    for ($row = 1; $row <= $size; $row++) :?>
        <tr>

            <?php for ($cell = 1; $cell <= $size; $cell++) :?>

                <td>

                    <?php  if($row == $cell) {
                            echo 1;
                        }
                        elseif($row+$cell == $size + 1) {
                           echo 2;
                        }
                        elseif($cell > $row && ($row + $cell) < $size +1 ) {
                            echo 3;
                        }

                        elseif($cell > $row && ($row + $cell) > $size + 1 ) {
                            echo 4;
                        }

                        elseif($cell < $row && ($row + $cell) < $size + 1 ) {
                        echo 5;
                    }
                        else {
                            echo 0;
                        }
                    ?>

                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<hr>
<hr>
