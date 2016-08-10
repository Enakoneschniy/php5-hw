<!--Task 5

Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом
будет 1 2 4 5.-->

<h3>Task 5</h3>

<?php

$arrNumber = array();

for ($i = 0; $i < 20; $i++) {
    $arrNumber[] = rand(1, 30);
}

foreach ($arrNumber as $key => $value) {
    echo 'With repeats ' . $key . ' => ' . $value . '<br>';
}

$result = array_unique($arrNumber);

echo '<br>';

foreach ($result as $key => $value) {
    echo 'No repeats ' . $key . ' => ' . $value . '<br>';
}

unset($result); unset($arrNumber);

?>