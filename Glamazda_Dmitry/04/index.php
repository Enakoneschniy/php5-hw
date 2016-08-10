<?php

    $size = 10;

    function draw_table_x($x, $y){
        if ($x == $y) {
            return 1;
        }elseif($x + $y == $GLOBALS['size'] + 1){
            return 2;
        }elseif($x + $y < $GLOBALS['size']+2 && $x < $y){
            return 3;
        }elseif($x + $y >= $GLOBALS['size']+2 && $x < $y){
            return 4;
        }elseif($x + $y < $GLOBALS['size']+2 && $x > $y){
            return 6;
        }elseif($x + $y >= $GLOBALS['size']+2 && $x > $y){
            return 5;
        }else{
            return $x * $y;
        }
    }

/* Я не смог выполнить без массивов и статических данных хотелбы увидеть как это делается на одних условиях*/

    function draw_table_pascal($x, $y){
        static $arr = [];

        if($x >= $y && $x == $y || $y == 1){
            $arr[$x][$y] = 1;
        }elseif ($x >= $y){
            $arr[$x][$y] = $arr[$x-1][$y-1] + $arr[$x-1][$y];
        }
        return $arr[$x][$y];
    }

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table td{
            width:15px;
            height:15px;
            text-align: center;
        }
        .multipliers{
            background-color: dodgerblue;
            font-weight: bold;
        }

    </style>
</head>
<body>

<table border="1" cellspacing="0">
    <?php for($row = 1; $row <= $size; $row++):?>
        <tr>
            <?php for($cell = 1;$cell <= $size;$cell++):
                if($cell == 1 || $row == 1){?>
                    <td class="multipliers"><?=$cell*$row?></td>
                 <?php }else{ ?>
                    <td><?=$cell*$row?></td>
                <?php }?>
            <?php endfor?>
        </tr>
    <?php endfor?>
</table>

<hr>

<table>
    <?php for($i = 0; $i < 50; $i++):?>
    <tr>
        <?php if($i % 2 != 0):?>
            <td><?=$i?></td>
        <?php endif;?>
    </tr>
    <?php endfor;?>
</table>

<hr>

<table border="1" cellspacing="0">
    <?php for($row = 1; $row <= $size; $row++):?>
        <tr>
            <?php for($cell = 1;$cell <= $size;$cell++):?>
                <td><?=draw_table_x($row, $cell);?></td>
            <?php endfor?>
        </tr>
    <?php endfor?>
</table>

<hr>

<table border="1" cellspacing="0">
    <?php for($row = 1; $row <= $size; $row++):?>
        <tr>
            <?php for($cell = 1;$cell <= $size;$cell++):?>
                <td><?=draw_table_pascal($row, $cell);?></td>
            <?php endfor?>
        </tr>
    <?php endfor?>
</table>
</body>
</html>
