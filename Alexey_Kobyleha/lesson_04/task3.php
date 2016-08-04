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