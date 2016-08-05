<?php

$dayNum=date('N');
switch($dayNum){
    case 1:
        echo"monday";
        break;
    case 2:
        echo"tuesday";
        break;
    case 3:
        echo"wednesday";
        break;
    case 4:
        echo"thursday";
        break;
    case 5:
        echo"friday";
        break;
    case 6:
        echo"saturday";
        break;
    case 7:
        echo"sunday";
        break;
    default:
        echo"ERROR";
        break;
}
echo"<hr>";
$dayNum=date('N');
switch($dayNum){
    case 1:
        echo"monday";
        break;
    case 2:
        echo"tuesday";
        break;
    case 3:
        echo"wednesday";
        break;
    case 4:
        echo"thursday";
        break;
    case 5:
        echo"friday";
        break;
    case 6:
    case 7:
        echo"weekend";
        break;
    default:
        echo"ERROR";
        break;
}
echo "<hr>";
//цикл с предусловием
$n=10;
$i=1;
while($i<=$n){
    echo $i,"<br>";
    $i++;
}
echo "<hr>";
// цикл с постусловием
$n=10;
$i=15;
do{
    echo $i,"<br>";
    $i++;
}while ($i<=$n);

echo "<hr>";
$n=10;
$i=1;
while($i<=$n){
    if($i%2!=0) {
        echo $i, "<br>";
    }
    $i++;
}
echo "<hr>";
//универсальный цикл
for($i=0;$i<=5;$i++){
    echo $i, "<br>";
}
echo "<hr>";

for($i=0;$i<=5;$i++){
    echo $i, "<br>";
    for($j=5;$j<=10;$j++) {
        echo $j, "";
    }
    echo"<br>";
}
echo "<hr>";
?>
<table border="1" cellspacing="0">
    <?php for ($row=1;$row<=10;$row++):?>
        <tr>
            <?php for ($cell=1;$cell<=10;$cell++):?>
                <td><?=$row+$cell?></td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>