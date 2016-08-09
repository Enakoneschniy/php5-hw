<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTTP Request</title>
</head>
<body>
<h2>************* Задачи 1, 2 *************</h2>

<!-- Ф о р м а -->

<form action="" method="get">
    <p>
        <label for="size">Matrix size</label>
        <input type="text" name="size" id="id">
    </p>
    <p>
        <label for="t_1">Show Table 1</label>
        <input type="checkbox" name="t_1" id="t_1">
    </p>
    <p>
        <label for="t_2">Show Table 2</label>
        <input type="checkbox" name="t_2" id="t_2">
    </p>
    <p>
        <label for="t_3">Show Table 3</label>
        <input type="checkbox" name="t_3" id="t_3">
    </p>

    <p>
        <input type="submit" name="submit" value="Generate">
    </p>


</form>


<?php
$size;
if($_REQUEST['submit']) {
    $size = $_REQUEST['size'];
}
?>

<!-- Ч е к б о к с   1 -->

<?php if($_REQUEST['t_1'] && $_REQUEST['submit']):?>
    <hr>
    <table border="1" cellspacing="0">
        <?php
        for ($row = 1; $row <= $size; $row++) :?>
            <tr>
                <?php for ($cell = 1; $cell <= $size; $cell++) :?>
                    <td> <?= $row*$cell ?> </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <!-- Ч е к б о к с   2 -->

<?php elseif($_REQUEST['t_2'] && $_REQUEST['submit']):?>

    <table border="1" cellspacing="0">
        <?php for ($row = 1; $row <= $size; $row++):?>
            <tr>
                <?php for ($cell = 1; $cell <= $size; $cell++):?>
                    <td>
                        <?php if($row == $cell){
                            echo 1;
                        }elseif (($row + $cell) === $size + 1){
                            echo 2;
                        }elseif ($cell > $row && ($row + $cell) < $size + 1){
                            echo 3;
                        }elseif ($cell > $row && ($row + $cell) > $size + 1){
                            echo 4;
                        }elseif ($cell < $row && ($row + $cell) > $size + 1){
                            echo 5;
                        }else{
                            echo 6;
                        }?>
                    </td>
                <?php endfor;?>
            </tr>

        <?php endfor;?>
    </table>

    <!-- Ч е к б о к с   3 -->

<?php elseif($_REQUEST['t_3'] && $_REQUEST['submit']):?>
    <?php
// Скопировано с инета
    $first = array(1);
    $second = array();
    for ($i = 1; $i <= $size; $i++) {
// the first element in each row is 1
        $second[0] = 1;
        for ($j = 1; $j < $i; $j++) {
            $second[$j] = $first[$j] + $first[$j-1];
        }
        echo implode(' ',$second).'<br />';
        $first = $second;
        $second = array();
        $first[] = 0;
    }
 ?>

    <!-- Ч е к б о к с   1, 2, 3 -->

    <?php elseif($_REQUEST['t_1'] && $_REQUEST['t_2'] && $_REQUEST['t_3'] && $_REQUEST['submit']):?>


    <table border="1" cellspacing="0">
        <?php
        for ($row = 1; $row <= $size; $row++) :?>
            <tr>
                <?php for ($cell = 1; $cell <= $size; $cell++) :?>
                    <td> <?= $row*$cell ?> </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <br>
    <table border="1" cellspacing="0">
        <?php for ($row = 1; $row <= $size; $row++):?>
            <tr>
                <?php for ($cell = 1; $cell <= $size; $cell++):?>
                    <td>
                        <?php if($row == $cell){
                            echo 1;
                        }elseif (($row + $cell) === $size + 1){
                            echo 2;
                        }elseif ($cell > $row && ($row + $cell) < $size + 1){
                            echo 3;
                        }elseif ($cell > $row && ($row + $cell) > $size + 1){
                            echo 4;
                        }elseif ($cell < $row && ($row + $cell) > $size + 1){
                            echo 5;
                        }else{
                            echo 6;
                        }?>
                    </td>
                <?php endfor;?>
            </tr>

        <?php endfor;?>
    </table>
    <br>
    <?php
// Скопировано с инета
    $first = array(1);
    $second = array();
    for ($i = 1; $i <= $size; $i++) {
// the first element in each row is 1
        $second[0] = 1;
        for ($j = 1; $j < $i; $j++) {
            $second[$j] = $first[$j] + $first[$j-1];
        }
        echo implode(' ',$second).'<br />';
        $first = $second;
        $second = array();
        $first[] = 0;
    }
    ?>

<?php else:?>
    <p>Введите число и выберите таблицу</p>
<?php endif;?>

<h2>************* Задача 3.1 *************</h2>

<form action="" method="get">
    <p>
        <label for="name">Как выс зовут? :) </label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <input type="submit" name="submit">
    </p>
</form>
<?php
$name;
if($_REQUEST['submit'] && $_REQUEST['name']) {
    $name = $_REQUEST['name'];
    echo "Привет, $name";
}
?>
<h2>************* Задача 3.2 *************</h2>

<form action="" method="get">
    <p>
        <label for="name_1">Как выс зовут? :) </label>
        <input type="text" name="name_1" id="name_1">
    </p>
    <p>
        <label for="years">Сколько вам лет ? </label>
        <input type="text" name="years" id="years">
    </p>
    <p>
        <label for="years">Введите сообщение </label>
        <textarea name="txtarea" id="txtarea" cols="30" rows="10">
        </textarea>
    </p>
    <p>
        <input type="submit" name="submit">
    </p>
</form>
<?php
$name;
$years;
$txtarea;
if($_REQUEST['submit'] && $_REQUEST['name_1'] && $_REQUEST['txtarea']) {
    $name = $_REQUEST['name_1'];
    $years = $_REQUEST['years'];
    $txtarea = $_REQUEST['txtarea'];

    strip_tags($name);
    strip_tags($years);
    strip_tags($txtarea);

    echo "Привет ,  $name, $years, лет.<br>";
    echo "Твоё сообщение: $txtarea";
}
?>

<h2>************* Задача 3.3 *************</h2>

<?php if($_REQUEST['age'] && $_REQUEST['submit_last']) :?>

    <?php echo "$age"; ?>

<?php else: ?>
<form action="" method="get">
    <p>
        <label for="years">Сколько вам лет ? </label>
        <input type="text" name="age" id="age">
    </p>

    <p>
        <input type="submit" name="submit_last">
    </p>
</form>

<?php endif; ?>

