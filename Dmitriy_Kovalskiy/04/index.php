<!DOCTYPE html>
<html>
    <head>
        <title>Using cycle</title>

    </head>
    <body>
<?php
$rows=10;
$cells= 10;
?>

<table border="1" cellspacing="0">
    <?php for ($i = 1; $i <= $rows; $i++):?>
        <tr>
            <?php for ($j = 1; $j <= $cells; $j++):?>
                <?php if($j == 1 || $i == 1):?>
                    <td bgcolor="#adff2f"><?php echo $i * $j; ?></td>
                <?php else:?>
                    <td><?php echo $i * $j?></td>
                <?php endif;?>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>

    </table>
<!--Непарные числа-->
    <hr/>
    <?php for ($c = 1; $c <= 50; $c++){
        if($c%2 == 1){
            echo  $c , "<br>";
        }
    }
?>
<hr/>
<?php
$n = 10;
?>
<table
    border="1"
    cellspacing="0"

    style = "width: 300px;
height: 300px;
text-align: center;
font-size: 15pt;
 margin: 50px auto;"
    }
>

    <?php for ($i = 1; $i <= $n; $i++):?>
        <tr>
            <?php for ($j = 1; $j <= $n; $j++):?>
                <?php if($j == $i):?>
                    <td bgcolor="blue">1</td>
                <?php elseif( ($j + $i) == $n + 1):?>
                    <td bgcolor="#fffff0">2</td>
                <?php elseif( $j > $i && ($j + $i) < $n + 1):?>
                    <td bgcolor="yellow">3</td>
                <?php elseif( $j > $i && ($j + $i) > $n + 1):?>
                    <td bgcolor="red">4</td>
                <?php elseif( $j < $i && ($j + $i) > $n + 1):?>
                    <td bgcolor="#deb887">5</td>
                <?php elseif( $j < $i && ($j + $i) < $n + 1):?>
                    <td bgcolor="#a9a9a9">6</td>
                <?php else:?>
                    <td>0</td>
                <?php endif;?>
            <?php endfor;?>
        </tr>
    <?php endfor;?>

    <?php
    $arr3 = [];
    for($row=1;$row <= $n; $row++){
        for($cell=1; $cell <= $n; $cell++){
            if($row <= $cell && $row == $cell || $row == 1){
                $arr3[$row][$cell] = 1;
            }
            elseif($row <= $cell){
                $arr3[$row][$cell] =   $arr3[$row][$cell-1] + $arr3[$row-1][$cell-1];
            }
        }
    }
    ?>

    <table border = "0">
            <?foreach($arr3 as $rows):?>
                <tr>
                    <? foreach ($rows as $cell ):?>
                        <td><? echo $cell; ?> </td>
                    <?endforeach;?>
                </tr>
            <?endforeach;?>

        <hr/>
    </table>
</table>
    </body>
</html>
