<?php
    $a = 3;
    $b = 4;
    $x = 0;
    if ($a < $b) {
        $x = "One";
        if($b == 4){
            echo $x."dddd";
        }
    }
    echo $x;
    if($a == 3) {
        $x = 'Two';
    }else{

    }
    echo $x;
echo "<hr>";
    //echo date('n');//N

$dayNum = date('N'); // порядковый номер дня в неделе

    switch ($dayNum = 22) {
        case 1: {
            echo 'Понедельник';
            break;
        }
        case 2:
            echo 'Вторник';
            break;
        case 3:
            echo 'Среда';
            break;
        case 4:
            echo 'Четверг';
            break;
        case 5:
            echo 'Пятница';
            break;
        case 6:
            echo 'Суббота';
            break;
        case 7:
            echo 'Воскресенье';
            break;
        default:
            echo "Ошибка!!!";
            break;
    }

    echo "<hr>";

$dayStr = 'Понедельник';

switch (dayStr){
    case 1: {
        echo 'Понедельник';
        break;
    }
    case 2:
        echo 'Вторник';
        break;
    case 3:
        echo 'Среда';
        break;
    case 4:
        echo 'Четверг';
        break;
    case 5:
        echo 'Пятница';
        break;
    case 6:
        echo 'Суббота';
        break;
    case 7:
        echo 'Воскресенье';
        break;
    default:
        echo "Ошибка!!!";
        break;
}

echo "<hr>";

$dayNum = date('N'); // порядковый номер дня в неделе

switch ($dayNum = 2) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Будни';
        break;
    case 6:
    case 7:
        echo 'Выходные';
        break;
    default:
        echo "Ошибка!!!";
        break;
}

echo "<hr>";

if ($dayNum >= 1 && $dayNum <= 5) {
      echo 'Будни';
} elseif ($dayNum == 6 || $dayNum == 7) {
      echo 'Выходные';
} else {
      echo "Ошибка!!!";
}

echo "<hr>";

$n = 10;
$i = 1;

while ($i <= $n) {
      echo $i, "<br>";
      $i++;
}

echo "<hr>";

$n = 12;
//$i = 1;

do{
    echo $i, "<br>";
    $i++;
}while($i <= $n);

echo "<hr>";

$n = 10;
$i = 1;

while ($i <= $n) {
    if ($i % 2 == 0){
        $i++;
      break;
    }
    echo $i, "<br>";
    $i++;
}

echo "<hr>";

for ($i = 0; $i >= -30; $i--){
    echo $i, "<br>";
}

echo "<hr>";

for ($i = 0; $i < 5; $i++){
    echo $i, "<br>";
    for ($j = 5; $j <= 10; $j++){
        echo $j, " ";
    }
    echo "<br>";
}

echo "<hr>";

?>
<table border="1" cellspacing="0">
<?php for ($row = 1; $row <= 10; $row++):?>
    <tr>
        <?php for ($cell = 1; $cell <= 10; $cell++):?>
            <td><?=$row+$cell?></td>
        <?php endfor;?>
    </tr>
<?php endfor;?>

</table>