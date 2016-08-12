
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
<form method="get">
<div>
    <p>
        =================================================== ЗАДАЧА 1 ====================================================<br>
        <label for="sInput">Введите расстояние &nbsp</label>
        <input type="text" id = "sInput" name = "sInput" size="5" value="<?=isset($_REQUEST['sInput']) ? $_REQUEST['sInput'] : '' ?>">
        км
    </p>
    <p>
        <label for="tInput">Введите время &nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <input type="text" id = "tInput" name = "tInput" size="5" value="<?=isset($_REQUEST['tInput']) ? $_REQUEST['tInput'] : '' ?>">
        ч
    </p>
    <p>
        <label >Выберите тип вывода</label>
        <label for = "r1"><input type="checkbox" name="ch1" id = "ch1" checked = checked>КМ/ч</label>
        <label for = "r2"><input type="checkbox" name="ch2" id = "ch2" checked = checked>М/c</label>
    </p>
    <p>
        <input type="submit" id = "sub" value="Найти скорость">
    </p>


</div>
</form>
</body>
</html>
<?php


function Speed($S,$t,$type)
{
    if($type == 1 && $t >= 0)
        {
            $speed  = ($S/$t)." км/ч. Или же ".(($S*1000)/($t*360))."м/с";
        }
    elseif($type == 2 && $t >= 0)
        {
            $speed  = ($S/$t)." км/ч";
        }
    elseif($type == 3 && $t >= 0)
        {
            $speed  = ($S*1000/$t*360)." м/с";
        }
        return $speed;
}

    if($_REQUEST['ch1'] == 'on' && $_REQUEST['ch2'] == 'on')
        {
            $showType = 1;
        }
    elseif ($_REQUEST['ch1'] == 'on')
        {
            $showType = 2;
        }
    elseif ($_REQUEST['ch2'] == 'on')
        {
            $showType = 3;
        }
    else
        {
            $showType = 0;
        }

echo "Скорость с которой вы приодолели это расстояние = ".Speed($_REQUEST['sInput'],$_REQUEST['tInput'],$showType);


?>

<hr>
=================================================== ЗАДАЧА 2 ====================================================
<form>
    <p>
        <label for="fac">Введите число, факториал которого хотите получить</label>
    </p>
    <p>
        <input type="text" id = "fac" name = "fac" size="2" value="<?=isset($_REQUEST['fac']) ? $_REQUEST['fac'] : '' ?>">
    </p>
    <p>
        <input type="submit" id ="facsub" value="Найти факториал">
    </p>
</form>

<?php



    function factorial ($n)
    {
        $F = 1;

        for ($i = 1; $i <= $n; $i++)
        {

            $F *= ($i);
        }
        return $F;
    }

    echo " Факториал числа ".$_REQUEST['fac']." равен ".factorial($_REQUEST['fac']);
?>

<hr>
=================================================== ЗАДАЧА 3 ====================================================
<form>
    <p>
        <label for="arrSize">Введите размер массива</label>
        <input type="text" id = "arrSize" name = "arrSize" size="2" value="<?=isset($_REQUEST['arrSize']) ? $_REQUEST['arrSize'] : '' ?>">
    </p>
    <p>
        <input type="submit" id ="arrSub" value="Сгенерировать">
    </p>
</form>

<?php



    function generateArr ($arrSize)
        {
            $randomArray = [];
               for($row = 0; $row <  $arrSize; $row++)
                    {
                        for($cell = 0; $cell <  $arrSize; $cell++)
                            {
                                $randomArray[$row][$cell] = rand(-99,99);
                            }
                    }
            return $randomArray;
        }

     $generated = generateArr($_REQUEST['arrSize']) ;
    ?>


<table>
    <?php for($row = 0; $row < $_REQUEST['arrSize'] ; $row++){?>
    <tr>
        <?php for($cell = 0; $cell <  $_REQUEST['arrSize']; $cell++){?>
        <td>
            <?= $generated[$row][$cell]?>
        </td>
        <?}?>
    </tr>
    <?}?>
</table>
<hr>

=================================================== ЗАДАЧА 4 ====================================================

<form>
    <p>
        <label for="sumSize">Введите размеры массивов, которые будут суммироватся</label>
        <input type="text" id = "sumSize" name = "sumSize" size="2" value="<?=isset($_REQUEST['sumSize']) ? $_REQUEST['sumSize'] : '' ?>">
    </p>
    <p>
        <input type="submit" id ="sumsub" value="Сгенерировать">
    </p>
</form>
<?php



function sumArr ($arrSize)
{
    $randomArrayFirst = generateArr($arrSize);
    $randomArraySecond = generateArr($arrSize);

    for($row = 0; $row <  $arrSize; $row++)
    {
        for($cell = 0; $cell <  $arrSize; $cell++)
        {
            $randomArray[$row][$cell] = $randomArrayFirst[$row][$cell] + $randomArraySecond[$row][$cell]  ;
        }
    }

    return $randomArray;
}

$summed = sumArr($_REQUEST['sumSize']) ;
?>


<table>
    <?php for($row = 0; $row < $_REQUEST['sumSize'] ; $row++){?>
        <tr>
            <?php for($cell = 0; $cell <  $_REQUEST['sumSize']; $cell++){?>
                <td>
                    <?= $summed[$row][$cell]?>
                </td>
            <?}?>
        </tr>
    <?}?>
</table>
<hr>
