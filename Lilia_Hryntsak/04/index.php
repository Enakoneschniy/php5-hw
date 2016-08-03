<?php
echo date('N');

echo"<hr>";

$dayNum = date('N'); //номер дня в неделе

switch ($dayNum){
    case 1:
        echo 'Понедельник';
        break;
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
}

echo"<hr>";

$dayStr = "Понедельник";

switch ($dayStr){
    case 'Понедельник':
        echo 1;
        break;
    case 'Вторник':
        echo 2;
        break;
    case 'Среда':
        echo 3;
        break;
    case 'Четверг':
        echo 4;
        break;
    case 'Пятница':
        echo 5;
        break;
    case 'Суббота':
        echo 6;
        break;
    case 'Воскресенье':
        echo 7;
        break;
    default:
        echo "Ошибка!!!";
        break;
}

echo"<hr>";

case6:
case7:
 echo "Выходные";

echo"<hr>";

if($dayNum >= 1 && $dayNum <= 5){
    echo 'Будни';}
elseif($dayNum == 6 || $dayNum == 7) {
    echo 'Выходные';}
else{echo "Ошибка!!!";}

echo"<hr>";
//первый цикл
$n = 10;
$i = 1;

while ($i <= $n){
    echo $i,"<br>";
    $i++;
}

echo"<hr>";
//второй цикл
$n = 10;
$i = 1;

do{
    echo $i, "<br>";
    $i++;}
    while($i <= $n);

echo"<hr>";

$n = 10;
$i = 1;

while ($i <= $n){
    if($i % 2 == 0)
    echo $i,"<br>";
    $i++;
}

echo"<hr>";

$n = 10;
$i = 1;

while ($i <= $n){
    if($i % 2 == 0){
        $i++;
    continue;
    }
    echo $i,"<br>";
    $i++;}

echo"<hr>";
//третий цикл
for ($i = 0; $i <= 20; $i++){
    echo $i, "<br>";
}

echo"<hr>";

for ($i = 0; $i <= 5; $i++){
    echo $i, "<br>";
    for ($j = 5; $j <= 10; $j++){
        echo $j, "";
    }
    echo "<br>";
}
echo"<hr>";
?>


<table border="1" cellspacing = "0">
<?php for ($row = 1; $row <= 10; $row++):?>
    <tr>
        <?php for($cell = 1; $cell <= 10; $cell++):?>
            <td>
                <?=$row+$cell?>
            </td>
        <?php endfor;?>
    </tr>
    <?php endfor;?>
</table>

