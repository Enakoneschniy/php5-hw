<!--Task 6

Дан массив размера n. После каждого отрицательного элемента массива вставить
элемент с нулевым значением.-->

<h3>Task 6</h3>

<?php

$n = 20;
$arrNumber = array();

for ($i = 0; $i < $n; $i++) {
    $arrNumber[] = rand(-100, 100);
}
var_dump($arrNumber);

foreach ($arrNumber as $key => $value) {
    if ($value > 0) {
        $result[] = $value;
    } elseif ($value < 0) {
        $result[] = $value;
        $result[] = 0;
    }
}

var_dump($result);

unset($result); unset($arrNumber);

?>