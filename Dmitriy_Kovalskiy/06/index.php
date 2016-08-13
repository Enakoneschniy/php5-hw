<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method = 'post'>
    <label for "row"> Enter a size of matrix</label>
    <input type = "text" name = "matrix" id = "matrix" value="<?=isset($_REQUEST['matrix']) ? $_REQUEST['matrix'] : ''?>">

    <input type = "submit" name = "submit"  value = "<?$_REQUEST['Generate']?> Generate"><br>

    <input type = "checkbox" name = "multiply"  value = "($_REQUEST['multiply'])">multiply<br>

    <input type = "checkbox" name = "diagonal"  value =  "($_REQUEST['diagonal'])"">diagonal<br>

    <input type = "checkbox" name = "paskal"  value =  "($_REQUEST['paskal'])"">Paskal<br>

    <label for "name">Enter your name</label>
    <input type = "text" name = "name" id = "name" value="<?=isset($_REQUEST['name']) ? $_REQUEST['name'] : ''?>">

    <label for "name">Enter your age</label>
    <input type = "text" name = "age" id = "age" value="<?=isset($_REQUEST['age']) ? $_REQUEST['age'] : ''?>"><br><br>

    <label for "text">Enter your massage</label>
    <p><textarea rows="10" cols="45" name="text" ></textarea></p>
</form>
<?php
$n = $_REQUEST['matrix'];
$name = $_REQUEST['name'];
for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= $n; $j++){
        $arr[$i][$j]=$i*$j;
        }
    }
?>
<table border="0">
    <? if($_REQUEST['multiply']):?>
    <?foreach($arr as $rows):?>
        <tr>
            <? foreach ($rows as $cell ):?>
                <td><? echo $cell?></td>
            <? endforeach;?>
         </tr>
    <? endforeach;?>
    <?endif;?>
</table>
<?php
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n; $j++){
            if($i==$j) {
                $arr1[$i][$j] = 1;
            }
            elseif($i+$j == $n+1){
                $arr1[$i][$j] = 2;
            }
            elseif($j>$i && ($j + $i) < $n + 1){
                $arr1[$i][$j] =3;
            }
            elseif($j<$i && ($j + $i) < $n + 1){
                $arr1[$i][$j] =6;
            }
            elseif ($j>$i && ($j + $i) > $n + 1){
                $arr1[$i][$j] =4;
            }
            elseif ($j<$i && ($j + $i) > $n + 1){
                $arr1[$i][$j] =5;
            }
        }
    }

?>

<table border="0">
    <? if($_REQUEST['diagonal']):?>
        <?foreach($arr1 as $rows):?>
            <tr>
                <? foreach ($rows as $cell ):?>
                    <td><? echo $cell; ?> </td>
                <?endforeach;?>
            </tr>
        <?endforeach;?>
    <?endif;?>
</table>


<?php
$arr3 = [];
for($row=1;$row <= $n; $row++){
        for($cell=1; $cell <= $n; $cell++){
            if($row <= $cell && $row == $cell || $row == 1){
                $arr3[$row][$cell] = 1;
            }
            elseif($row <= $cell){
                $arr3[$row][$cell] =   $arr3[$row][$cell-1] + $arr3[$row-1][$cell-1];
            }
        }
    }
 ?>

<table border = "0">
    <? if($_REQUEST['paskal']):?>
     <?foreach($arr3 as $rows):?>
    <tr>
        <? foreach ($rows as $cell ):?>
        <td><? echo $cell; ?> </td>
        <?endforeach;?>
    </tr>
    <?endforeach;?>
    <?endif;?>

</table>

<?
if($_REQUEST['name']||$_REQUEST['age']||$_REQUEST['text']){
        echo "<i>"."Привет, ". $_REQUEST['name']. " , " .$_REQUEST['age']." лет."."<br>"."Твое сообщение: ".strip_tags($_REQUEST['text'])."</i>"."<br>";

}






