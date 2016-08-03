<meta charset="UTF-8" />

<?php
   $age = 10;

    if($age >= 18 && $age <= 59){
        echo 'Вам работать и работать!';
    }else if($age < 18 && $age >= 1){
        echo 'Вам еще рано рабртать!';
    }else if($age > 59 && $age < 90){
        echo 'Пора на пенсию';
    }else if($age > 90 || $age < 1){
        echo 'Неизвестный возраст!';
    }


?>

