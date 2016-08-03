<html>
<head>
    <meta  charset=utf-8\">
    <title>home_work_4</title>
</head>
<body style="background: linear-gradient(to top, #BFE9DB, #6AC1B8, #07588A);">

<center>

    <h1 style="font-style:italic">Task 4.1 v 1.0</h1>
    <hr>
    <h1 style="color:white">Таблица умножения</h1>

    <?php
    $rows = 10; // количество строк, tr
    $cols = 10; // количество столбцов, td
    $table = '<table border="2">';
    for ($tr=1; $tr<=$rows; $tr++){
        $table .= '<tr>';
        for ($td=1; $td<=$cols; $td++){
            if ($tr===1 or $td===1){
                $table .= '<th style="color:white;background-color: dodgerblue; font-size: 20px; width: 40px; height: 40px; text-align: center;">'. $tr*$td .'</th>';
            }else{
                $table .= '<td style="color:white;background-color:#CCCCCC;text-align: center;">'. $tr*$td .'</td>';
            }
        }
        $table .= '</tr>';
    }

    $table .= '</table>';
    echo $table;
    echo "<p>"
    ?>
    <p>
    <hr>




    <h1 style="font-style:italic; text-align: center">Task 4.2</h1>
    <hr>

    <?php
    for ($i = 0; $i <= 50; $i++){
        if(($i %2) == 0){
            continue;
        }
    echo $i, "<br>";
    }

    echo "<hr>";
    ?>


    <h1 style="font-style:italic; text-align: center">Task 4.1 v 2.0</h1>
    <hr>

    <table border = "1" cellspacing="0" >
        <?php for( $row =1; $row <=10; $row++):?>
            <tr>
                <?php for($cell = 1; $cell <= 10; $cell++ ):?>
                    <td   style="color:white;background-color: dodgerblue; font-size: 20px; width: 40px; height: 40px; text-align: center;">
                        <?=$row*$cell?>
                    </td>
                <?php endfor;?>
            </tr>
        <?php endfor;?>

    </table>



</center>


</body>
</html>



