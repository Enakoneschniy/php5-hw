<?php
session_start();

function speed($s, $t, $val){
    $speed[1] = $s / $t . " км/ч";
    $speed[2] = $speed[1] / 3.6 . " м/с";
    return $speed[$val];
}

if(!empty($_POST['submit'])){
    if($_POST['S'] <= 0 || $_POST['t'] <= 0){
        $_SESSION['error'] = '<strong><em>Число должно быть больше нуля</em></strong>';
        header("Location: index.php");
        exit();
    }else{
        $_SESSION['res'] = "<strong><em>" .speed($_POST['S'], $_POST['t'], $_POST['val']). "</em></strong>";
        header("Location: index.php");
        exit();
    }
}
?>

<h3><ins>Рассчет скорости</ins></h3>

<?php
echo $_SESSION['error'];
echo $_SESSION['res'];
session_unset();
session_destroy();
?>
<form method="post" action="">
    <table>
        <tr>
            <td>Пройденный путь (км):</td> <td><input type="text" name="S" /></td>
        </tr>
        <tr>
            <td>Время движения (ч):</td> <td><input type="text" name="t" /></td>
        </tr>
        <tr>
            <td><input type="radio" name="val" value="1" checked="checked" /> км/ч</td> <td><input type="radio" name="val" value="2" /> м/с</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Рассчитать" /></td>
        </tr>
    </table>
</form>

