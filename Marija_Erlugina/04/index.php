<?php

  //  echo date('N'); // ВС - 0
//echo date('n'); // ВС - 1

$dayNum = date('N'); //номер дня в неделе

switch ($dayNum) {
    case 1:
        echo "Понедельник";
        break;
    case 2:
        echo "Вторник";
        break;
    case 3:
        echo "Среда";
        break;
    case 4:
        echo "Четверг";
        break;
    case 5:
        echo "Пятница";
        break;
    case 6:
    case 7:
        echo "Выходной";
        break;
    default:
        echo "Error";
        break;
}


//*************** Циклы *****************

// 4 вида циклов - while, do while, for, foreach

echo "<hr>";

$n = 10;
$i = 1;

while ($i <= $n) { // проверка по истине
    echo $i, "<br>";
    //$i++;
    $i += 2; // вывод нечетных чисел
}

echo "<hr>";

$n = 10;
$i = 1;



do {
    echo $i, "<br>";
    $i++;
} while ($i <= $n);

echo "<br><br>For<br><br>";
// for (; ;) - бесконечный цикл
for ($i = 0; $i <= 20; $i++) {
    echo $i, "<br>";
}

echo "<br><br><br>";
echo $i;
echo $i;


echo "<hr>";

// можно строить таблицы -- tr td

for ($i = 0; $i <= 5; $i++) {
    echo $i, "<br>";

    for ($j = 5; $j <= 10; $j++) {
        echo $j, " ";
    }

    echo "<br>";

}


echo "<br>";
?>

<table border="1" cellspacing="0">

<?php
    for ($row = 1; $row <= 10; $row++) :?>
       <tr>

       <?php for ($cell = 1; $cell <= 10; $cell++) :?>

        <td> <?= $row+$cell ?> </td>

        <?php endfor; ?>

       </tr>

    <?php endfor; ?>

</table>



<?php

// д/з  --
//
// главная/побочная диагональ
    // треугольник паскаля - последний цикл (пустые места -> пустые ячейки)


