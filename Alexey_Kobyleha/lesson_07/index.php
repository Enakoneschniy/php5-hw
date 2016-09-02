<?php

//  Task 1
echo "<h3>Task 1</h3>";

/*
При условии получения данных из форм:
Переводим в наименьшую единицу. т.е километры - метры, часы в секунды.
*/

$distance = 100000; // meters

$hours = 1;
$minutes = 30;
$seconds = 0;

$time = (($hours * 60) + $minutes) * 60 + $seconds;

function carSpeed($d, $t, $view = 1)
{
    if ($view === 1) {
        $speed = $d / $t;
        return $speed;
    } else {
        $speed = ($d / 1000) / ($t / 3600);
        return $speed;
    }
}

echo round(carSpeed($distance, $time, 0)); // if argument 3 != 1 we derive KM/H


// Task 2
echo "<h3>Task 2</h3>";

$number = 5;

function factorial($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial($number);

// Task 3
echo "<h3>Task 3</h3>";

$arrSize = 10;

function createArray($size)
{
    $newArray = [];
    for ($i = 0; $i < $size; $i++) {
        $newArray[] = rand(1, 50);
    }
    return $newArray;
}


// Task 4
echo "<h3>Task 4</h3>";

$arrOne = createArray(15); // Generate array from Task 3
$arrTwo = createArray(10); // Generate array from Task 3

function arrSum($arrOne, $arrTwo)
{
    $newArray = [];
    foreach ($arrOne as $key => $value) {
        if (array_key_exists($key, $arrTwo)) {
            $newArray[] = $value + $arrTwo[$key];
        } else {
            $newArray[] = $value;
        }

    }
    return $newArray;
}

$sumTwoArrays = arrSum($arrOne, $arrTwo);

?>