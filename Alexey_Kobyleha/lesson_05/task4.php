<!--Task 4

Определите, есть ли в массиве повторяющиеся элементы.-->

<h3>Task 4</h3>

<?php

$arrNumber = array();

for ($i = 0; $i < 30; $i++) {
    $arrNumber[] = rand(1, 30);
}

$result = array_count_values($arrNumber);

foreach ($result as $n => $repeated) {
    if ($repeated > 1) {
        echo 'Number ' . $n . ' a repeated ' . $repeated . '<br>';
    }
}

unset($result); unset($arrNumber);

?>