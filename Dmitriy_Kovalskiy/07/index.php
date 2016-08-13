<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>07</title>
</head>
<body>
<h1>Нахождение скорости автомобиля</h1>
<form method = 'post' name = "form" id="form">

    <label for "way">Введите пройденый путь</label>
    <input type = "text" name = "way" id = "way" value="<?=isset($_REQUEST['way']) ? $_REQUEST['way'] : ''?>"><br><br>

    <label for "time">Введите время движения</label>
    <input type = "text" name = "time" id = "time" value="<?=isset($_REQUEST['time']) ? $_REQUEST['time'] : ''?>"><br><br>

    <input type = "checkbox" name = "km"  value = "($_REQUEST['km'])">км/ч

    <input type = "checkbox" name = "m"  value = "($_REQUEST['m'])">м/с  <br><br>

    <input type = "submit" name = "submit"  value = "<?$_REQUEST['Generate']?> Generate"><br><br>
</form>
<?php
$s = $_REQUEST['way'];
$t = $_REQUEST['time'];
function speed($s,$t){
    $v = $s/$t;
    return $v;
}
if($_REQUEST['way']){
    if($_REQUEST['time']){
        if($_REQUEST['km']){
            echo "Скорость автомобиля ".speed($s,$t)." км/ч";
        }
        elseif($_REQUEST['m']){
            echo "Скорость автомобиля ".speed($s,$t)." м/с";
        }
        else{
            echo "Отмете нужный эквивалент скорости";
        }
    }
}
?>
<h1>Нахождение факториала</h1>
<form method = 'post' name = "form" id="form">

    <label for "number">Введите число</label>
    <input type = "text" name = "number" id = "number" value="<?=isset($_REQUEST['number']) ? $_REQUEST['number'] : ''?>"><br><br>

    <input type = "submit" name = "submit"  value = "<?$_REQUEST['Generate']?> Generate"><br><br>
</form>
<?php
$n = $_REQUEST['number'];
function factorial($n){
    if ($n === 0){
        return 1;
    }
    else {
        return $n * factorial($n-1);
    }
}
if($_REQUEST['number']){
    echo $n."!"." = ".factorial($n);
}
?>
<h1>Генератор случайных чисел</h1>
<form method = 'post' name = "form" id="form">

    <label for "size">Введите число значений массива</label>
    <input type = "text" name = "size" id = "size" value="<?=isset($_REQUEST['size']) ? $_REQUEST['size'] : ''?>"><br><br>

    <input type = "submit" name = "submit"  value = "<?$_REQUEST['Generate']?> Generate"><br><br>
</form>
<?php
$size = $_REQUEST['size'];
function random($size){
    $arr = [];
        for($i=1; $i<=$size; $i++){
            $arr[$i] = rand(-100,100);
    }
        return $arr;
}
if($_REQUEST['size']){
    echo "<pre>";
    print_r(random($size));
    echo "</pre>";
}
?>
<h1>Сумма элементов двух массивов</h1>
<form method = 'post' name = "form" id="form">

    <label for "sizes"> Введите число значений массивов</label>
    <input type = "text" name = "sizes" id = "sizes" value="<?=isset($_REQUEST['sizes']) ? $_REQUEST['sizes'] : ''?>"><br><br>

    <input type = "submit" name = "submit"  value = "<?$_REQUEST['Generate']?> Generate"><br><br>
</form>
<?php
$sizes = $_REQUEST['sizes'];
$arr1 = random($sizes);
$arr2 = random($sizes);

 function arr_sum($arr1,$arr2) {
    $array = [];
        for($j=1; $j<= $GLOBALS["sizes"]; $j++){
            $array[$j] = $arr1[$j] + $arr2[$j];
         }
     return $array;
 }

if($_REQUEST['sizes']) {
    echo "Первый массив";
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    echo "Второй массив";
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    echo "Требуемый массив";
    echo "<pre>";
    print_r(arr_sum($arr1,$arr2));
    echo "</pre>";
}
?>