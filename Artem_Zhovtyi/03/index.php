<?php
//task 1
$age= rand(0,100);
echo "$age <br>";

// task 2
if ($age>=18&&$age<=59){
    echo"Вам еще работать и работать <br>";
}
elseif ($age>59){
    echo"Вам пора на пенсию <br>";
}
elseif ($age>=1&&$age<=17){
    echo"Вам еще рано работать <br>";
}
else{
    echo "Неизвестный возраст <br>";
}

