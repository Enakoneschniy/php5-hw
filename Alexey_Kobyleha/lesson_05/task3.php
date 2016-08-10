<!--Task 3

Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная
с нуля.-->

<h3>Task 3</h3>

<?php

$n = 15;
$arrNumber = array();

for ($i = 0; $i < $n; $i++) {
    if ($i % 2 == 0) {
        $arrNumber[$i] = 0;
    } else {
        $arrNumber[$i] = 1;
    }
}

foreach ($arrNumber as $key => $value) {
    echo $key . ' = ' . $value . '<br>';
}

unset($arrNumber);

?>