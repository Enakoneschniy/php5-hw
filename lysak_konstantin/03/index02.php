<?php
$age = rand(0 , 200);
echo $age;
echo "<hr/>";
if ($age > 18 && $age <= 59){
    echo "Вам еще работать и работать";
}if ($age > 59 && $age <= 100){
    echo "Вам пора на пенсию";
}elseif($age > 0 && $age <= 17){
    echo "Вам еще рано работать";
    }elseif($age == 0 || $age > 100 ) {
        echo "Не известный возраст";
};
?>
