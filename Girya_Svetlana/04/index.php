
// ЗАДАНИЕ № 1

<?php

$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td

$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $table .= '<td>'. $tr*$td .'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;

?>
echo '<hr>';



//ЗАДАНИЕ №3

<html>
<head>
    <title> PHP</title>
</head>
<body>
<?php $S = 10; ?>
    <table>
        <?php

        for ($y = 1; $y <= $S; $y ++){
            echo "<tr>";
            for ($x = 1; $x <= $y; $x ++){
                if($x == 1){
                    $number[$y][$x] = 1; // start with 1
                    echo "<td>".$number[$y][$x]."</td>";
                }elseif($x == $y){
                    $number[$y][$x] = 1; // end with 1
                    echo "<td>".$number[$y][$x]."</td>";
                }else{
                    $number[$y][$x] = $number[$y-1][$x-1] + $number[$y-1][$x];
                    echo "<td>".$number[$y][$x]."</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>