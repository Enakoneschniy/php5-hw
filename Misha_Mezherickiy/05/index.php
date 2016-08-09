
<style>
    td
    {
        width: 15px;
        align="center";
    }

</style>
<?php
function arShow(&$array )
{?>
    <table border="1" cellspacing ="0">
        <?php for ($rows = 1; $rows <= 2; $rows++):?>
            <tr>
                <?php for($cols = 1; $cols <= count($array)-1; $cols++):?>
                    <?php if($rows == 1):?>
                        <td align="center" bgcolor ="#deb887">
                        <b><?= $cols?>
                    <?php else:?>
                        <td>
                        <?= $array[$cols]?>
                    <? endif?>
                    </td>
                <?php endfor ;?>
            </tr>
        <?php endfor?>
    </table>


<?}

?>

<h2>Первое задание</h2>
<h3>Определить сумму 1+4+7+10+...+n </h3>
<?php
        $arSum = [1];
        $n = 22;
        $j = 3;
        $sum = 0;

        for($i = 1; $i <= $n/3; $i++)
            {
                $arSum[$i] = $i*$j+1;
                $sum += $arSum[$i];
            }


arShow($arSum);

echo "Сумма массива чисел 1+4+7+10+...+".$n." равна ".$sum;

?>


<hr>
<h2>Второе задание</h2>
<h3>Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.</h3>

<?php


    $arSqr = [];

        for($i = 0; $i <= $n; $i++)
        {
            $arSqr[$i] = $i*$i;
        }


    arShow($arSqr);

?>

<hr>
<h2>Третье задание</h2>
<h3>Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начинаяс нуля.</h3>

<?php

    $arOneZero = [];

        for($i = 1; $i <= $n; $i++)
        {
            if($i % 2 == 0)
            {
                $arOneZero[$i] = 0;
            }
            else
            {
                $arOneZero[$i] = 1;
            }
        }

    arShow($arOneZero);

?>


<hr>
<h2>Четвертое задание</h2>
<h3>Определите, есть ли в массиве повторяющиеся элементы.</h3>

<?php

    $count = 0;
    $arFindRepetition =[1,3,5,4,3,2,4,5,6,7,8];

    arShow($arFindRepetition);

    sort($arFindRepetition);

        for($i = 0; $i<= sizeof($arFindRepetition); $i++)
        {
            if($arFindRepetition[$i] == $arFindRepetition[$i-1])
            {
                $count++;
            }

        }
        if($count == 0)
            {
                echo "Повторяющихся элементов нет";
            }
        else
            {
                echo "Количество повторяющихся элементов: ".$count;
            }
        ?>

<hr>
<h2>Пятое задание</h2>
<h3>Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5.</h3>

<?php

    $arDeleteItem = [1,2,4,4,2,5];

    arShow($arDeleteItem);

    sort($arDeleteItem);

    for($i = 0; $i<= sizeof($arDeleteItem); $i++)
    {
        if($arDeleteItem[$i] == $arDeleteItem[$i-1])
        {
            unset($arDeleteItem[$i]) ;
        }
    }

echo "<pre>";
print_r($arDeleteItem);
echo "</pre>";

?>

<hr>
<h2>Шестое задание</h2>
<h3>Дан массив размера n. После каждого отрицательного элемента массива вставить элемент с нулевым значением.</h3>

<?php

function arrayInsert(&$array,$pos=0,$value,$key='')
{
        if (strlen($key) == 0)
            {
                $key = $pos;
            }
        $c = count($array);
        $one = array_slice($array,0,$pos);
        $two = array_slice($array,$pos,$c);
        $one[$key] = $value;
        $array = array_merge($one,$two);
        return;
 }

    $arPlusNull = [2, 4, 1, -4, 2, -3, 1, 4];

    arShow($arPlusNull);

       for($i = 0; $i <= sizeof($arPlusNull); $i++)
       {
           if($arPlusNull[$i] < 0)
           {
             arrayInsert($arPlusNull,$i+1,0);
           }
       }

echo "<br>";

    arShow($arPlusNull);

?>
<hr>
<h2>Задание с повышеной сложностью</h2>
<h3>Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.</h3>

<?php

    $arSort = [3,5,3,2,4,5,2,5,8,11,2,3,5];

echo "<br>Несортрованый массив:";

    arShow($arSort);

echo "<br>Отсортрованый массив встроенным методом:";

    sort($arSort);

echo "<br>";

    arShow($arSort);

// Пузырьковая сортировка

    function arSorted(&$array)
    {
        for ($i = 0; $i < count($array); $i++)
        {
            for ($j = 0; $j < count($array); $j++)
            {
                if ($array[$i] < $array[$j])
                {
                    $hold = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $hold;
                }
            }
        }

    }

    arSorted($arSort);

echo "<br>Пузырьковая сортировка:";

    arShow($arSort);
?>
<hr>

<h2>Треугольник Паскаля</h2>

<?php
    $size = 10;
    $arTriangle = [];

    for($i = 0; $i <= $size; $i++)
    {
        for($j = 0; $j <= $size; $j++)
        {
            if($i > $j)
                {
                    $arTriangle[$i][$j] = $arTriangle[$i - 1][$j - 1] + $arTriangle[$i - 1][$j];
                }
            elseif ($j == 0 || $j == $i )
                {
                    $arTriangle[$i][$j] = 1;
                }

        }
    }

?>


<table border="1" cellspacing ="0">
    <?php for ($rows = 0; $rows <= $size; $rows++):?>
        <tr>
            <?php for($cols = 0; $cols <= $size; $cols++):?>
                <td>
                   <?= $arTriangle[$rows][$cols]?>
                </td>
            <?php endfor;?>
        </tr>
    <?php endfor?>
</table>
