<?php

$arrError = []; // Array for errors
$arrMatrixOne = []; // Matrix multiplication
$arrMatrixTwo = []; // Matrix hourglass
$arrMatrixThree = []; // Matrix Phifagor triangle

// BEGIN Generate errors

if (isset($_REQUEST['matrixGenerate'])) {
    if (isset($_REQUEST['matrixSize']) && $_REQUEST['matrixSize'] > 0 && ($_REQUEST['matrixSize'] < 100)) {
        $size = $_REQUEST['matrixSize'];
    } else {
        $arrError[] = "Matrix size can not be empty and must be < 100";
    }
    if (!isset($_REQUEST['matrixOne']) && !isset($_REQUEST['matrixTwo']) && !isset($_REQUEST['matrixThree'])) {
        $arrError[] = "It should be included at least one matrix!";
    }
}

// END Generate errors

// BEGIN Implementation array

if (isset($size) && isset($_REQUEST['matrixOne'])) {

    // Matrix multiplication array

    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            $arrMatrixOne[$i][$j] = $i * $j;
        }
    }
}

if (isset($size) && isset($_REQUEST['matrixTwo'])) {

    // Matrix hourglass array

    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            if ($i == $j) {
                $arrMatrixTwo[$i][$j] = 1;
            } elseif ($i + $j == $size - 1) {
                $arrMatrixTwo[$i][$j] = 2;
            } elseif ($i < $j && ($i + $j < $size - 1)) {
                $arrMatrixTwo[$i][$j] = 3;
            } elseif ($i < $j && ($i + $j > $size - 1)) {
                $arrMatrixTwo[$i][$j] = 4;
            } elseif ($j < $i && ($i + $j > $size - 1)) {
                $arrMatrixTwo[$i][$j] = 5;
            } elseif ($j < $i && ($i + $j < $size - 1)) {
                $arrMatrixTwo[$i][$j] = 6;
            }
        }
    }
}

if (isset($size) && isset($_REQUEST['matrixThree'])) {

    // Matrix Phifagor triangle

    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            if ($i == 1) {
                $arrMatrixThree[$i][$j] = 1;
            } elseif ($i == $j) {
                $arrMatrixThree[$i][$j] = 1;
            } elseif (!isset($arrMatrixThree[$i - 1][$j - 1])) {
                $arrMatrixThree[$i][$j] = 1;
            } else {
                $arrMatrixThree[$i][$j] = $arrMatrixThree[$i - 1][$j - 1] + $arrMatrixThree[$i - 1][$j];
            }
        }
    }
}

// END Implementation array

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #matrix {
            width: 300px;
        }

        #matrix .inputs {
            margin: 25px;
        }

        table {
            margin: 25px;
        }

        table td {
            border: solid 1px cornflowerblue;
            width: auto;
            text-align: center;
        }
    </style>
    <title>Create matrix home work</title>
</head>
<body>
<form method="post" id="matrix">
    <div class="inputs">
        <label for="size">Matrix size:</label>
        <input type="text" name="matrixSize" id="size" size="10" value="<?php echo isset($size) ? $size : '' ?>">
    </div>

    <div class="inputs">
        <fieldset>
            <legend>Работа с матрицами</legend>

            <input type="checkbox" name="matrixOne"
                   title="Matrix multiplication" <?php echo isset($_REQUEST['matrixOne']) ? "checked" : '' ?>> Matrix
            multiplication<br>
            <input type="checkbox" name="matrixTwo"
                   title="Matrix hourglass" <?php echo isset($_REQUEST['matrixTwo']) ? "checked" : '' ?>> Matrix
            hourglass<br>
            <input type="checkbox" name="matrixThree"
                   title="Matrix Phifagor triangle" <?php echo isset($_REQUEST['matrixThree']) ? "checked" : '' ?>>
            Matrix Phifagor triangle<br>
        </fieldset>
    </div>

    <div class="inputs">
        <input type="submit" name="matrixGenerate" value="Generate">
    </div>
</form>
<?php

if (count($arrError) == 0) {
    if (isset($arrMatrixOne)) {
        echo "<table>";
        foreach ($arrMatrixOne as $tr) {
            echo "<tr>";
            foreach ($tr as $td) {
                echo "<td>" . $td . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    if (isset($arrMatrixTwo)) {
        echo "<table>";
        foreach ($arrMatrixTwo as $tr) {
            echo "<tr>";
            foreach ($tr as $td) {
                echo "<td>" . $td . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    if (isset($arrMatrixThree)) {
        echo "<table>";
        foreach ($arrMatrixThree as $tr) {
            echo "<tr>";
            foreach ($tr as $td) {
                echo "<td>" . $td . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
} else {
    foreach ($arrError as $value) {
        echo $value . "<br>";
    }
}

?>
</body>
</html>
