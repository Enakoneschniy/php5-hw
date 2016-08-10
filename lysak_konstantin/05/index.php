<?php

    // Task #1
    $sizeMassive = 10;
    $array = [];
    for ($i = 1; $i < $sizeMassive; $i=$i + 3){
        $array[] = $i;
    };
    echo "<pre>";
    var_dump($array);
    echo "</pre>";

    echo"<hr>";

    //Task #2
    $array = [];
        for ($i = 0; $i < $sizeMassive; $i++){
        $array[] = pow($i, 2);
        };

    echo "<pre>";
    var_dump($array);
    echo "</pre>";

    echo"<hr>";

    //Task #3
    $array = [];
        for ($i = 0; $i < $sizeMassive; $i++){
            if ($i%2 == 0) {
                $array[] = 0;
            }else{
                $array[] = 1;
            };
        };

    echo "<pre>";
    var_dump($array);
    echo "</pre>";

    echo"<hr>";

//Task #5

    $array2 = [1, 2, 2, 2, 3, 4, 5, 5, 6, 7];
    $res = array_unique($array2);

    echo "<pre>";
    var_dump($res);
    echo "</pre>";

    echo"<hr>";

//Task #6
    $array3 = [];
    for ($i = 0; $i < $sizeMassive; $i++){
        $array3[$i] = rand(-10, 10);
            foreach($array3 as $key => $var) {
                if ($var < 0) {
                     $array3[$key + 1] = 0;
                };
            }
    };

    echo "<pre>";
    var_dump($array3);
    echo "</pre>";

    echo"<hr>";

//Task #7
    $array4 = [1, 3, 5, 2, 4, -3, 10];
    for ($i = 0; $i < $sizeMassive; $i++){
       $array4[$i] = rand(-10, 10);
            sort($array4);// The first method
    };
    echo "<pre>";
    var_dump($array4);
    echo "</pre>";


?>