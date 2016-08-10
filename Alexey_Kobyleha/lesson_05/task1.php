<!--Task 1

Найти сумму 1+4+7+10+...+n.
n - можно изменять.-->

<h3>Task 1</h3>

<?php

$n = 19;

$arrNumber = array();

for ($i = 1; $i <= $n; $i += 3) {
    $arrNumber[] = $i;
}

$result = array_sum($arrNumber);
echo $result;

unset($arrNumber);

?>