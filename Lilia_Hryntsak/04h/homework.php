<?php
$cols = 5;
$rows = 6;

$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        if ($tr===1 or $td===1){
            $table .= '<th style="color:white;background-color:green;">'. $tr*$td .'</th>';
        }else{
            $table .= '<td>'. $tr*$td .'</td>';
        }
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;

echo"<hr>";

for ($i = 1; $i <= 50; $i++){
    if($i % 2 == 0){
        $i++;
        continue;}
    echo $i, "<br>"; $i++;}

echo"<hr>";

$cols = 10;
$rows = 10;

$table = '<table border="0">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        if ($tr===1 or $td===1){
            $table .= '<td>'. $tr*$td .'</td>';
        }else{
            $table .= '<td>'. $tr*$td .'</td>';
        }
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;

echo"<hr>";

$n = 10;
if($cell + $row == $n+1 );


//Нормальное решение домашки умножение

$size = 10;
?>
<table border="1" cellspacing="0">
    <?php for ($row = 1; $row <= $size; $row++):?>
        <tr>
            <?php for ($cell = 1; $cell <= $size; $cell++):?>
                <?php if($row == 1 || $cell == 1):?>
                    <td bgcolor="#add8e6"><?php echo $row * $cell?></td>
                <?php else:?>
                    <td><?php echo $row *$cell?></td>
                <?php endif;?>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>

<?php
echo"<hr>";?>
//диагонали

<style>
    td{ width:15px;}
</style>

<table border="1" cellspacing="0">
    <?php for ($row = 1; $row <= $size; $row++):?>
    <tr>
        <?php for ($cell = 1; $cell <= $size; $cell++):?>
            <td>

                <?php if($row == $cell) {
                    echo 1;
                }elseif (($row + $cell) === $size + 1){
                    echo 2;
                }elseif ($cell > $row && ($row + $cell) < $size + 1){
                    echo 3;
                }elseif($cell > $row && ($row + $cell) > $size + 1){
                    echo 4;
                }elseif($cell < $row && ($row + $cell) > $size + 1){
                    echo 5;
                }else{
                    echo 6;
                } ?>

            </td>
        <?php endfor;?>
    </tr>
<?php endfor;?>
</table>
//треугольник


