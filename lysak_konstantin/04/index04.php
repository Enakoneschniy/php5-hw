
<?php
$cols = 4;
$rows = 7;
?>

<table border="1" cellspacing="0">
<?php for ($row =1; $row <=7; $row++):?>
    <tr bgcolor="#ff8c00", text align = "center">
                <?php for ($cell = 1; $cell <=4; $cell++):?>
            <td><?=$row*$cell?></td>

        <?php endfor;?>
    </tr>
    <?php endfor;?>

</table>

<hr>

<?
$a = 50;
$i = 1;
for ($i=1;$i<=$a;$i++){
    if($i%2 !== 0){
        echo $i,"<br>";
    }
}

echo "<hr>";

for ($row = 1; $row <= 10; $row++) {
    echo "<br>";
    for ($cell = 1; $cell <= 10; $cell++)
        echo $cell*$row, "  ";
}

echo "<hr>";

for ($row = 0; $row < 10; $row++){
            echo "<br>";
        for ($cell = 0; $cell < 10; $cell++) {
            if ($row == $cell) {
                echo 1, " ";
            }elseif (($row + $cell) == (10 - 1)) {
                echo 2, " ";
            }elseif (($row < $cell) && ($cell + $row) < (10 - 1)) {
                echo 3, " ";
            }elseif (($row > $cell) && ($cell + $row) > (10 - 1)){
                echo 5, " ";
            }elseif (($row > $cell) && ($cell + $row) < (10 - 1)){
                echo 6, " ";
            }elseif (($row < $cell) && ($cell + $row) > (10 - 1)){
                echo 4, " ";
            }
        }
}

echo "<hr>";
