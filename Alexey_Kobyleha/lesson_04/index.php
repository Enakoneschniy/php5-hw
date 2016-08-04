<!--Task 1
Используя цикл for вывести в столбик нечетные числа от 1 до 50-->

<h3>Task 1</h3>

<?php
for ($i = 0; $i <= 50; $i++) {
    if ($i%2!=0) {
        echo "$i <br> \n";
    }
}
?>


<!--Task 2
Используя циклы отрисовать таблицу умножения 10x10. Закрасить и выделить первый tr и первый td-->

<h3>Task 2</h3>

<table border="1">
<?php $max = 10;
    for ($r = 1; $r <= $max; $r++): ?>
        <?php if ($r == 1): ?>
            <tr align="center" bgcolor="#5f9ea0" style="font-weight: bold">
        <?php else: ?>
            <tr>
        <?php endif; ?>
        <?php for ($c = 1; $c <= $max; $c++): ?>
            <?php if ($c == 1): ?>
                <td align="center" bgcolor="#5f9ea0" style="font-weight: bold"><?php echo $c*$r ?></td>
            <?php else: ?>
                <td><?php echo $c*$r ?></td>
            <?php endif; ?>
        <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<!--Task 3
1	5	5	5	5	5	5	5	5	2
3	1	5	5	5	5	5	5	2	6
3	3	1	5	5	5	5	2	6	6
3	3	3	1	5	5	2	6	6	6
3	3	3	3	1	2	6	6	6	6
3	3	3	3	2	1	6	6	6	6
3	3	3	2	4	4	1	6	6	6
3	3	2	4	4	4	4	1	6	6
3	2	4	4	4	4	4	4	1	6
2	4	4	4	4	4	4	4	4	1-->

<h3>Task 3</h3>

<table>
<?php

$max = 10;

for ($tr = 0; $tr < $max; $tr++):
    echo "<tr>";
        for ($td = 0; $td < $max; $td++):
            echo "<td style=\"width: 25px; height: 25px;\">";
                if ($td == $tr):
                    echo 1;
                elseif ($td + $tr == $max - 1):
                    echo 2;
                elseif ($td < $tr && ($tr + $td < $max - 1)):
                    echo 3;
                elseif ($td < $tr && ($tr + $td > $max - 1)):
                    echo 4;
                elseif ($tr < $td && ($tr + $td < $max - 1)):
                    echo 5;
                elseif ($tr < $td && ($tr + $td > $max - 1)):
                    echo 6;
                endif;
            echo "</td>";
        endfor;
    echo "</tr>";
endfor;

?>
</table>

<!--Task 4
1
1 	1
1 	2 	1
1 	3 	3 	1
1 	4 	6 	4 	1
1 	5 	10 	10 	5 	1
1 	6 	15 	20 	15 	6 	1
1 	7 	21 	35 	35 	21 	7 	1
1 	8 	28 	56 	70 	56 	28 	8 	1
1 	9 	36 	84 	126 	126 	84 	36 	9 	1-->

<h3>Task 4</h3>

<?php
$max = 10;
$arrTriangle = array();

    for ($tr = 1; $tr <= $max; $tr++) {

        for ($td = 1; $td <= $tr; $td++) {

            if ($tr == 1) {
                $arrTriangle[$tr][$td] = 1;

            } elseif ($tr == $td) {
                $arrTriangle[$tr][$td] = 1;

            } elseif (!isset($arrTriangle[$tr -1][$td -1])) {
                $arrTriangle[$tr][$td] = 1;

            }else {
                $arrTriangle[$tr][$td] = $arrTriangle[$tr - 1][$td - 1] + $arrTriangle[$tr - 1][$td];

            }
        }
    }

?>

<table>
    <?php for ($tr = 1; $tr <= $max; $tr++): ?>
        <tr>
            <?php for ($td = 1; $td <= $tr; $td++): ?>
                <td style="width: 25px; height: 25px;">
                    <?php echo $arrTriangle[$tr][$td]; ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
