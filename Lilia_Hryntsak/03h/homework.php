<?php
//Задание 1
$age = 16;
?>
<?php
//Задание 2
if (($age >= 18) && ($age <=59)){
    echo "Вам ещё работать и работать.";
}
elseif ($age > 59) {
    echo "Вам пора на пенсию.";
}
elseif (($age >= 1) && ($age <= 17)){
    echo "Вам ещё рано работать.";
}
else {
    echo "Неизвестный возраст";
}
?>
