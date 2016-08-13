<form action="" method="get">
    <input type="text" name="name">
    <input type="submit">
</form>
<?php
    $name = $_REQUEST['name'];
    echo 'Привет,'.$name;
?>

<form action="" method="get">
    <input type="text" name="name">
    <input type="text" name="age">
    <textarea name="message"></textarea>
    <input type="submit">
</form>
<?php
    $age = strip_tags($_REQUEST['age']);
    $name = strip_tags($_REQUEST['name']);
    $message = strip_tags($_REQUEST['message']);
    echo "Привет, $name, $age <br> твое сообщение: $message";
?>

<?php
    if (empty($_REQUEST['age']))
    {
?>
        <form action="" method="get">
            <input type="text" name="age">
            <input type="submit">
        </form>
<?php
    }
?>

<?php
    if (!empty($_REQUEST['age']))
    {
        $age = strip_tags($_REQUEST['age'])
        echo 'Ваш возраст: '.$age;
    }
?>

<?php

function generateRandomSelection($min, $max, $count)
{
    $result=array();
    if($min>$max) return $result;
    $count=min(max($count,0),$max-$min+1);
    while(count($result)<$count)
    {
        $value=rand($min,$max-count($result));
        foreach($result as $used) if($used<=$value) $value++; else break;
        $result[]=$value;
        sort($result);
    }
    shuffle($result);
    return $result;
}
?>