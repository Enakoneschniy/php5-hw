<?php
/*
   Task 1
   Home work example at - http://php.real.kh.ua/lesson_06/index.php
*/

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

// Task 2 php code

$arrErrorTaskTwo = []; // // Array for errors

if (isset($_REQUEST['sendMessage'])) {
    $name = strip_tags($_REQUEST['name']);
    $age = strip_tags($_REQUEST['age']);
    $message = strip_tags($_REQUEST['message']);
}

if (isset($_REQUEST['sendMessage'])) {
    if (empty($name)) {
        $arrErrorTaskTwo[] = "Enter your name!";
    }
    if (empty($age)) {
        $arrErrorTaskTwo[] = "Enter your age!";
    }
    if (empty($message)) {
        $arrErrorTaskTwo[] = "Enter your message!";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Create matrix home work</title>
</head>
<body>

<!--Begin task 1-->

<div class="taskOne">
    <h3>Task 1</h3>
    <form method="post" id="matrix">
        <div class="main">
            <div class="inputs">
                <label for="size">Matrix size:</label>
                <input type="text" name="matrixSize" id="size" size="10"
                       value="<?php echo isset($size) ? $size : '' ?>">
            </div>

            <div class="inputs">
                <fieldset>
                    <legend>Choose the matrix</legend>

                    <input type="checkbox" name="matrixOne" title="Matrix multiplication" <?php echo isset($_REQUEST['matrixOne']) ? "checked" : '' ?>> Matrix multiplication<br>
                    <input type="checkbox" name="matrixTwo" title="Matrix hourglass" <?php echo isset($_REQUEST['matrixTwo']) ? "checked" : '' ?>> Matrix hourglass<br>
                    <input type="checkbox" name="matrixThree" title="Matrix Phifagor triangle" <?php echo isset($_REQUEST['matrixThree']) ? "checked" : '' ?>>Matrix Phifagor triangle<br>
                </fieldset>
            </div>

            <div class="inputs">
                <input type="submit" name="matrixGenerate" value="Generate">
            </div>
        </div>
    </form>
<?php
    if (count($arrError) == 0) {
        if (isset($arrMatrixOne)) {
            echo "<table>";
            foreach ($arrMatrixOne as $keyOne => $tr) {
                echo "<tr>";
                foreach ($tr as $keyTwo => $td) {
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
</div>

<!--End task 1-->

<!--Begin task 2-->

<div class="taskTwo">
    <h3>Task 2</h3>
    <?php if (isset($_REQUEST['sendMessage']) && count($arrErrorTaskTwo) == 0) : ?>
        Привет, <?php echo !empty($name) ? $name : '' ?><br>
        Твое сообщение: <?php echo !empty($message) ? $message : '' ?><br>
    <?php else: ?>
        <form method="post" id="userData">
            <div class="inputs">
                <label for="name">Your name:</label>
                <input type="text" name="name" id="name" size="25px" value="<?php echo !empty($name) ? $name : '' ?>">
            </div>

            <div class="inputs">
                <label for="age">Your age:</label>
                <input type="text" name="age" id="age" size="25px" value="<?php echo !empty($age) ? $age : '' ?>">
            </div>

            <div class="inputs">
                <textarea name="message" id="message" placeholder="Your massege"><?php echo !empty($message) ? $message : '' ?></textarea>
            </div>

            <div class="inputs">
                <input type="submit" name="sendMessage" value="Send Message">
            </div>
        </form>
        <?php if (count($arrErrorTaskTwo) > 0): ?>
            <?php foreach ($arrErrorTaskTwo as $value): ?>
                <?php echo $value . "<br>"; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>
</div>

<!--End task 2-->

</body>
</html>
