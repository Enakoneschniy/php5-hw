
<?php
    echo '<h1> Home work 3 </h1>';


// Задача 3.1

echo "<h3><font color='skyblue'>Task 3.1</font></h3>";

echo '<hr>';

$age = -99; //произвольное значение
echo 'значение переменной age:'. " "."$age;";
echo "<p>";

echo "<b> Ответ: </b>" ;
if ($age >=18 and $age <60){
    echo "Вам еще работать и работать";
} else if ($age >= 1 and $age < 18) {
    echo "Вам ещё рано работать";
} else if ($age >= 60) {
    echo "Вам пора на пенсию";
} else {
echo "Неизвестный возраст";

}
