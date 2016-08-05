<!--Task 7 (Задание с повышенной сложностью)

Упорядочить значения массива по возрастанию. Реализовать двумя способами: с
помощью стандартной функции и без.-->

<h3>Task 7</h3>

<?php

$n = 20;
$arrNumber = array();

for ($i = 0; $i < $n; $i++) {
    $arrNumber[] = rand(-10, 50);
}

$standartSort = $arrNumber;

// Standart functions:

$timeStartOne = microtime(true); // Старт замера

asort($standartSort); // Что меряем

$timeEndOne = microtime(true);

$timeResult = $timeEndOne - $timeStartOne;

echo $timeResult . ' - Первый скрипт <br>'; // Время выполнения участка кода

/*Manual sort:
Одинаково работает как с цифрами там и словами (алфавитом).*/

$tempCount = count($arrNumber);
$manualSort = array();

$timeStart = microtime(true); // Старт второго замера

for ($i = 0; $i <= $tempCount; $i++) {
    foreach ($arrNumber as $key => $value) {
        if ($value === min($arrNumber)) {
            $manualSort[$key] = $value;     // $manualSort[$key] = $value; - Для сохранения старых индексов
            unset($arrNumber[$key]);
        }
    }
}

$timeEnd = microtime(true); // Конец второго замера

$time = $timeEnd - $timeStart;

echo $time . ' - Второй скрипт'; // Время выполнения второго участка кода

?>