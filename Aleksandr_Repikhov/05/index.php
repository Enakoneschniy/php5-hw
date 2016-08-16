
<?php
    echo '<h1> Home work 5 </h1>';



    $n = 20; //n - можно изменять.


// Задача 5.1

/* Найти сумму 1+4+7+10+...+n.   n - можно изменять.*/

    echo "<h3><font color='skyblue'>Task 5.1</font></h3>";
    echo '<hr>';

    $iSum=0;
    for($i=1; $i<=$n; $i+=3)
    {
        $iSum+=$i;
    }

    echo "При значении n=$n, сумма 1+4+7+10+...+n. равна $iSum";



// Задача 5.2

/*Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.*/

    echo '<hr>';
    echo "<h3><font color='skyblue'>Task 5.2</font></h3>";
    echo '<hr>';

    $arr;
    for ($i=0;$i<=$n;$i++){
        $arr[$i]=$i*$i;
    }
    echo "<pre>";
    print_r($arr);
    echo "</pre>";


// Задача 5.3

/*Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная
с нуля.*/

    echo '<hr>';
    echo "<h3><font color='skyblue'>Task 5.3</font></h3>";
    echo '<hr>';

    $arr;
    for ($i=0;$i<=$n;$i++){
        $arr[$i]=$i%2;
    }
    echo "<pre>";
    print_r($arr);
    echo "</pre>";


// Задача 5.4

/*Определите, есть ли в массиве повторяющиеся элементы.*/

echo '<hr>';
echo "<h3><font color='skyblue'>Task 5.4</font></h3>";
echo '<hr>';

print_r(array_count_values($arr));



 /*
 for ($i = 1; $i <= $n; $i++){
    $arr[] = rand(-20, 20);
 }
   var_dump($arr);
 $flag = false
 for ($i = 0; $i < $n; $i++){
    for ($j = $i + 1; $j < $n; $j++){
        if($arr[$i] == $arr[$j]){
            $flag = true;
               break;
        }
    }
    if ($flag == true){
        break;
    }
 }

 echo $flag == true ? "yes" : "no";

 */


// Задача 5.5

/*Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом
будет 1 2 4 5*/

echo '<hr>';
echo "<h3><font color='skyblue'>Task 5.5</font></h3>";
echo '<hr>';


$input = array(1, 2, 4, 4, 2, 5);
$result = array_unique($input);
print_r($result);



// Задача 5.6

/* Дан массив размера n. После каждого отрицательного элемента массива вставить
элемент с нулевым значением. */

    echo '<hr>';
    echo "<h3><font color='skyblue'>Task 5.6</font></h3>";
    echo '<hr>';

    $size = 1;
    $arTemp = [];

    for ($i=1; $i <= $size; $i++){
        $arTemp [$i] = rand (-10, 10);

    }
        if( $arTemp[1] < 0 ):
        $arTemp [$i] = 0;
        endif;

    echo "<pre>";
    print_r ($arTemp);
    echo "</pre>";


