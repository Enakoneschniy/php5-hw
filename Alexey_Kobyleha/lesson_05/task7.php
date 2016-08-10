<!--Task 7 (Задание с повышенной сложностью)

Упорядочить значения массива по возрастанию. Реализовать двумя способами: с
помощью стандартной функции и без.-->

<h3>Task 7</h3>

<?php

$n = 20;
$testDataArray = array();

for ($i = 0; $i < $n; $i++) {
    $testDataArray[] = rand(-10, 50);
}

$asortTestData = $testDataArray; // Array for asort() standart function
$bubleTestData = $testDataArray; // Array for Buble algorithm manual sort
$msortTestData = $testDataArray; // Array for manual sort. Test

// Standart functions:

asort($asortTestData);

var_dump($asortTestData);

// Manual sort:
// Algorithm "Bubble Sort".

$count = count($bubleTestData) - 1;

for ($i = $count; $i >= 0; $i--) {
    for ($j = 0; $j <= ($i - 1); $j++) {
        if ($bubleTestData[$j] > $bubleTestData[$j + 1]) {
            $k = $bubleTestData[$j];
            $bubleTestData[$j] = $bubleTestData[$j + 1];
            $bubleTestData[$j + 1] = $k;
        }
    }
}

var_dump($bubleTestData);

// Manual sort:
// Output new array $newManualSort ...

$tempCount = count($msortTestData);
$newManualSort = array();

for ($i = 0; $i <= $tempCount; $i++) {
    foreach ($msortTestData as $key => $value) {
        if ($value === min($msortTestData)) {
            $newManualSort[] = $value;     // $manualSort[$key] = $value; - Для сохранения старых индексов
            unset($msortTestData[$key]);
        }
    }
}

var_dump($newManualSort);

?>