<!--Task 4
1
1 	1
1 	2 	1
1 	3 	3 	1
1 	4 	6 	4 	1
1 	5 	10 	10 	5 	1
1 	6 	15 	20 	15 	6 	1
1 	7 	21 	35 	35 	21 	7 	1
1 	8 	28 	56 	70 	56 	28 	8 	1
1 	9 	36 	84 	126 	126 	84 	36 	9 	1-->

<h3>Task 4</h3>

<?php
$max = 10;
$arrTriangle = array();

for ($tr = 1; $tr <= $max; $tr++) {

    for ($td = 1; $td <= $tr; $td++) {

        if ($tr == 1) {
            $arrTriangle[$tr][$td] = 1;

        } elseif ($tr == $td) {
            $arrTriangle[$tr][$td] = 1;

        } elseif (!isset($arrTriangle[$tr -1][$td -1])) {
            $arrTriangle[$tr][$td] = 1;

        }else {
            $arrTriangle[$tr][$td] = $arrTriangle[$tr - 1][$td - 1] + $arrTriangle[$tr - 1][$td];

        }
    }
}

?>

<table>
    <?php for ($tr = 1; $tr <= $max; $tr++): ?>
        <tr>
            <?php for ($td = 1; $td <= $tr; $td++): ?>
                <td style="width: 25px; height: 25px;">
                    <?php echo $arrTriangle[$tr][$td]; ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
