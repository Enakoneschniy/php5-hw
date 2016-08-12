<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<hr>
<form method="post">
        <p>
                <label for="size">Array size</label>
                <input type="text" name="size" id = "size" value="<?=isset($_REQUEST['size']) ? $_REQUEST['size'] : '' ?>">

            <p>
                <input type="checkbox" name="matrixOne" id="matrixOne" >
                <label for="matrixOne">Show first matrix</label>
            </p>
            <p>
                <input type="checkbox" name="matrixTwo" id="matrixTwo" >
                <label for="matrixOne">Show second matrix</label>
            </p>
            <p>
                <input type="checkbox" name="matrixThree" id="matrixThree">
                <label for="matrixOne">Show third matrix</label>
            </p>
            <p>
                <input type="submit" name="submit" value="Create">
            </p>
        <hr>
        </p>

</form>
<hr>
</body>
</html>

<?php

        function Show ($array)
        {
            for($i = 1; $i <= sizeof($array); $i++)
            {
                echo "<br>";
                for($j = 1; $j <= sizeof($array); $j++)
                {?>
                    <?= $array[$i][$j]." ";?>
               <? }
            }
            echo "<hr>";
        }
        $size = $_REQUEST['size'];

        if($_REQUEST['submit'] == true)
            {
                if ($_REQUEST['size'] == true)
                {
                    if ($_REQUEST['matrixOne'] == true)
                    {
                        $arTable = [];
                        for($row = 1; $row <= $size; $row++)
                        {
                            for($cell = 1; $cell <= $size; $cell++)
                            {
                                $arTable[$row][$cell] = $row*$cell;
                            }
                        }
                        Show($arTable);

                    }
                    if ($_REQUEST['matrixTwo'] == true)
                    {
                        $arSecondMatrix = [];
                        for ($row = 1; $row <= $size; $row++)
                        {
                            for ($cell = 1; $cell <= $size; $cell++)
                            {
                                if ($row == $cell)
                                {
                                    $arSecondMatrix [$row][$cell] = 1;
                                }
                                elseif (($row + $cell) === $size + 1)
                                {
                                    $arSecondMatrix [$row][$cell] = 2;
                                }
                                elseif ($cell > $row && ($row + $cell) < $size + 1)
                                {
                                    $arSecondMatrix [$row][$cell] = 3;
                                }
                                elseif ($cell > $row && ($row + $cell) > $size + 1)
                                {
                                    $arSecondMatrix [$row][$cell] = 4;
                                }
                                elseif ($cell < $row && ($row + $cell) > $size + 1)
                                {
                                    $arSecondMatrix [$row][$cell] = 5;
                                }
                                else
                                {
                                    $arSecondMatrix [$row][$cell] = 6;
                                }
                            }
                        }
                        Show($arSecondMatrix);


                    }
                    if ($_REQUEST['matrixThree'] == true)
                    {
                        $arTriangle = [];

                        for ($row = 0; $row <= $size; $row++)
                        {
                            for ($cell = 0; $cell <= $size; $cell++)
                            {
                                if ($row > $cell)
                                {
                                    $arTriangle[$row][$cell] = $arTriangle[$row - 1][$cell - 1] + $arTriangle[$row - 1][$cell];
                                }
                                elseif ($row == 0 && $cell == $row)
                                {
                                    $arTriangle[$row][$cell] = 1;
                                }

                            }
                        }
                        Show($arTriangle);

                    }


                }

        }
?>
<?php
if(!isset($_REQUEST['subname']))
{
?>
<form method="post">
    <p>
        <label for="name"> Your name - Your age </label>
    <p>
        <input type="text" name="name" id = "name">
         -
        <input type="text" name="age" id = "age" size="3">
    </p>
    <p>
        <p>Your message</p>
        <textarea rows="10" cols="45" name="message"></textarea>
    </p>
    <p><input type="submit" value="Send" name="subname"></p>
    </p>
</form>
    <?}
        $sms = $_REQUEST['message'];
        $age = $_REQUEST['age'];
        $name = $_REQUEST['name'];
            if($_REQUEST['subname'] == true)
            {
                if ($name != false && $age != false && $sms != false)
                {?>
                    <i><?="Hello, " .$name.", ".$age." year's";?><br></i>
                    <i><?="Your message is:"?><br></i>
                    <i><?= $sms?></i>

                <?}
            }

