<hr>
<h2>Таблица умножения</h2>
<table border="1" cellspacing ="0">
    <?php for ($rows = 1; $rows <= 10; $rows++):?>
        <tr>
            <?php for($cols = 1; $cols <= 10; $cols++):?>
                <?php if($rows == 1 || $cols == 1):?>
                        <td align="center" bgcolor ="#ffd700">
                        <? echo "<b>"?>
                    <?=$rows*$cols?>
                <? endif?>
                <?php if($rows != 1 && $cols != 1):?>
                <td>
                    <?=$rows * $cols?>
                <? endif?>
                </td>
            <?php endfor;?>
        </tr>
    <?php endfor?>
</table>

<hr>

<h2>Веселые треугольнички</h2>
<table border="1" cellspacing ="0">
    <?php for ($row = 1; $row <= 10; $row++):?>
        <tr>
            <?php for($cell = 1; $cell <= 10; $cell++):?>
                <td>
                    <?php if($row == $cell):?>
                        <?= "1"?>
                    <? endif?>
                    <?php if($row + $cell == 11):?>
                        <?= "2"?>
                    <? endif?>
                    <?php if($cell-$row >= 1 && $row + $cell <= 10):?>
                        <?= "3"?>
                    <? endif?>
                     <?php if($cell + $row >= 12 && $cell > $row):?>
                        <?= "4"?>
                    <? endif?>
                    <?php if($row >= 7 && $row-$cell > 0 && $row + $cell >= 12 ):?>
                        <?= "5"?>
                    <? endif?>
                    <?php if($row - $cell >= 1 && $row + $cell <= 10):?>
                        <?= "6"?>
                    <? endif?>
                </td>
            <?php endfor;?>
        </tr>
    <?php endfor?>
</table>

<hr>
<h2>Треугольник Паскаля(<i>недоделаный</i>)</h2>
<table border="1" cellspacing ="0">

    <? $left  = 1 ?>
    <? $left1  = 1 ?>
    <? $left2  = 0 ?>
    <? $left3  = 0 ?>
    <? $left4  = 0 ?>
    <? $left5  = 0 ?>
    <? $left6  = 0 ?>
    <? $left7  = 0 ?>


    <?php for ($row = 1; $row <= 10; $row++):?>
        <tr>
            <? $right = 1?>
            <?php for($cell = 1; $cell <= 10; $cell++):?>
                <td>

                    <?php if($row == $cell || $cell == 1):?>
                        <?= "1"?>
                    <? endif?>

                    <?php if($row > $cell && $cell != 1 && $row !=1):?>
                        <? {?>
                            <?php if($cell == 2):?>
                                <? $left = $left1?>
                                <? $left1 += $right?>
                            <? endif?>
                            <?php if($cell == 3):?>
                                <? $left = $left2?>
                                <? $left2 += $right?>
                            <? endif?>
                            <?php if($cell == 4):?>
                                <? $left = $left3?>
                                <? $left3 += $right?>
                            <? endif?>
                            <?php if($cell == 5):?>
                                <? $left = $left4?>
                                <? $left4 += $right?>
                            <? endif?>
                            <?php if($cell == 6):?>
                                <? $left = $left5?>
                                <? $left5 += $right?>
                            <? endif?>
                            <?php if($cell == 7):?>
                                <? $left = $left6?>
                                <? $left6 += $right?>
                            <? endif?>
                            <?php if($cell == 8):?>
                                <? $left = $left7?>
                                <? $left7 += $right?>
                            <? endif?>
                            <?}?>
                            <?= $right + $left?>
                            <? $right += $left ?>
                    <? endif?>
                </td>
            <?php endfor;?>
        </tr>
    <?php endfor?>
</table>

<hr>
<h2>Вывести нечетные числа от 1 до 50</h2>
<?php for ($i = 1; $i <= 50; $i++):?>
    <?php if ($i%2 !=0):?>
<?="$i <br>" ?>
<? endif?>
<? endfor?>