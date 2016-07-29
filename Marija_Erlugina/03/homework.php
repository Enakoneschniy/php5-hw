<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 29.07.2016
 * Time: 21:53
 */

$age = 27;

if ($age >= 18 || $age <= 59) {
    echo "Вам ещё работать и работать";
}
elseif ( $age <= 59 ) {
    echo "Вам пора на пенсию";
}
elseif ( $age <= 17 ) {
    echo "Вам ещё рано работать";
}
else {
    echo "Неизвестный возраст";
}


