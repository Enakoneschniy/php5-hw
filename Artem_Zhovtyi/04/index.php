<?php
$rows=rand(1,10);
$cols=rand(1,10);
echo "$rows <br>";
echo "$cols <br>";
?>


<table border="1" cellspacing="0">
    <?php for ($row=1;$row<=$rows;$row++):?>
        <tr>
            <?php for ($cell=1;$cell<=$cols;$cell++):?>
                <td><?=$row*$cell?></td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>

<?php
echo "<hr>";
for($i=1;$i<=50;$i++){
if($i%2!=0) {
    echo $i, "<br>";}
}
echo "<hr>";
?>

<table border="1" cellspacing="0">
    <?php for ($row=1;$row<=10;$row++):?>
        <tr>
            <?php for ($cell=1;$cell<=10;$cell++):?>
                <td><?=$row*$cell?></td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>

<?php
echo "<hr>";
?>

<table border="1" cellspacing="0">
    <?php for ($row=1;$row<=10;$row++):?>
        <tr>
            <?php for ($cell=1;$cell<=10;$cell++):?>
                <td>
                    <?if($row===$cell){
                        echo "1";
                    }elseif($row+$cell===11){
                        echo "2";
                    }elseif($row<=4 && $cell>$row && $row+$cell<12){
                        echo "3";
                    }elseif($row+$cell>=12 && $cell>$row){
                        echo "4";
                    }elseif($row>=6 && $row+$cell>=12){
                        echo "5";
                    }else{
                        echo "6";
                    }
                    ?>
                </td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>

<?php
echo "<hr>";
?>