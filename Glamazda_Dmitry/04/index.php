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
            width:30px;
            height:30px;
            text-align: center;
        }
        .multipliers{
            display: block;
            width:30px;
            height:18px;
            padding:6px 0;
            background-color: dodgerblue;
            font-weight: bold;
        }

    </style>
</head>
<body>

<table border="1" cellspacing="0">
    <?php for($row = 1; $row <= 10; $row++):?>
        <tr>
            <?php for($cell = 1;$cell <= 10;$cell++):?>
                <td><?=matrix1($row, $cell);?></td>
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
    <?php for($row = 1; $row <= 10; $row++):?>
        <tr>
            <?php for($cell = 1;$cell <= 10;$cell++):?>
                <td><?=matrix2($row, $cell);?></td>
            <?php endfor?>
        </tr>
    <?php endfor?>
</table>

<hr>

<table border="1" cellspacing="0">
    <?php for($row = 1; $row <= 10; $row++):?>
        <tr>
            <?php for($cell = 1;$cell <= 10;$cell++):?>
                <td><?=matrix3($row, $cell);?></td>
            <?php endfor?>
        </tr>
    <?php endfor?>
</table>
</body>
</html>






<?php

    function matrix1($x, $y){
        if($x == 1 || $y == 1){
            return "<span class='multipliers'>" .$x * $y ."</span>";
        }else{
            return $x * $y;
        }
    }

    function matrix2($x, $y){
        if ($x == $y) {
            return 1;
        }elseif($x + $y == 11){
            return 2;
        }elseif($x + $y < 12 && $x < $y){
            return 3;
        }elseif($x + $y >= 12 && $x < $y){
            return 4;
        }elseif($x + $y < 12 && $x > $y){
            return 6;
        }elseif($x + $y >= 12 && $x > $y){
            return 5;
        }else{
            return $x * $y;
        }
    }
    /* Я не смог выполнить без массивов и статических данных хотелбы увидеть как это делается на одних условиях*/
    function matrix3($x, $y){
        static $arr = array();

        if($x >= $y && $x == $y || $y == 1){
            $arr[$x][$y] = 1;
        }elseif ($x >= $y){
            $arr[$x][$y] = $arr[$x-1][$y-1] + $arr[$x-1][$y];
        }
        return $arr[$x][$y];

    }

?>
