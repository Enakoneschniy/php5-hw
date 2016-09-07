<?php

    $user1 = [
        'name'=> "john",
        "weight" => 50,
        'money' => 30
    ];
    $user2 = [
        'name'=> "abraam",
        "weight" => 70,
        'money' => 45
    ];
    $user3 = [
        'name'=> "jacob",
        "weight" => 55,
        'money' => 77
    ];
    $user4 = [
        'name'=> "andrea",
        "weight" =>84,
        'money' => 20
    ];
    $user5 = [
        'name'=> "sharah",
        "weight" => 40,
        'money' => 3110
    ];



    function check($arr,...$params){
        for($i = 0;$i < count($params);$i++){
            if(!$params[count($params)-1] instanceof Closure){
                echo 'error in params of function';
                return;
            }
        }

        $sum = $params[count($params)-1]($arr);

        for($i = 0;$i < count($params)-1;$i++){
            $sum +=  $params[count($params)-1]($params[$i]);
        }
        return $sum;
    }

    echo check($user1, $user2, $user3, $user4, $user5, function ($item){
        return $item['weight'];
    });

?>