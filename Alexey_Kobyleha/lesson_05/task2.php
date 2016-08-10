<!--Task 2

Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.-->

<h3>Task 2</h3>

<?php

$n = 10;

$arrNumber = array();

for ($i = 1; $i <= $n; $i++) {
    $arrNumber[$i] = $i * $i;
}

foreach ($arrNumber as $key => $value) {
    echo $key . '&#178; = ' . $value . '<br>';
}

unset($arrNumber);

?>