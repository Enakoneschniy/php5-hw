<h1><?php echo"Task 1"?></h1>
<p>
<?php

$size=10;
?>
<style>
    td {
        width:10px;
        heigh:10px;
        text-allign:center;
    }
</style>
<table border="1" cellspacing="0">
<?php for ($row=1;$row<=$size;$row++):?>

    <tr>
        <?php for($cell=1;$cell<=$size;$cell++):?>

        <?php if($row==1||$cell==1):?>
            <td bgcolor="#1e90ff"><?php echo $row*$cell?></td>
        <?php else:?>
            <td><?php echo $row*$cell?></td>
         <?php endif;?>


<?php endfor;?>

    </tr>
    <?php endfor;?>
</table>
</p>
<p>

<h1><?php echo"Task 2"?></h1>

<?php

$size=10;
?>
<style>
    td {
        width:10px;
        heigh:10px;
        text-allign:center;
    }
</style>
<table border="1" cellspacing="0">
    <?php for ($row = 1; $row <= $size; $row++):?>

    <tr>
        <?php for ($cell = 1; $cell <= $size; $cell++):?>

        <td><?php if($row==$cell){
        echo 1;}
            elseif($row+$cell==$size+1){
                echo 2;}
                else if($row<$cell && $row+$cell< $size+1){
                    echo 3;
                }
                elseif($cell>$row && $row+$cell>$size+1){
                    echo 4;
                }
                elseif ($row>$cell && $row+$cell>$size+1){
                    echo 5;
                }
                else {echo 6;}?>

                </td>
    <?php endfor;?>
    </tr>
    <?php endfor;?>
</table>



</p>

