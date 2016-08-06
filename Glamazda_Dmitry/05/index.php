<meta charset="UTF-8" />
<?php

    /* function for creating random values*/

    function createRandomArr($arQuantity, $minVal, $maxVal){
        $arr = [];
        for($i = 0; $i < $arQuantity;$i++){
            $arr[$i] = rand($minVal, $maxVal);
        }
        return $arr;
    }


            /* Task one */



    function getSum($num){
        $res = 1;
        while($num > 3){
            if ($num % 3 == 1){
                $res += $num;
                $num -= 3;
            }elseif($num % 3 == 0){
                $res += $num;
                $num -= 2;
            }elseif($num % 3 == 2){
                $res += $num;
                $num -= 1;
            }
        }

        return $res;
    }
    echo getSum(11);
    echo "<hr>";



            /* Task Two */



    function getArSquare($num){
        $res = [];
        for($i = 1; $i <= $num; $i++){
            $res[$i] = $i*$i;
        }
        return $res;
    }
    $arSquare = getArSquare(5);
    foreach ($arSquare as $key => $value){
        echo "$key => $value <br>";
    }
    echo "<hr>";

            /* Task tree */
    function creatBinaryArr($numKey){
        $arRes = [];
        for($i = 0; $i < $numKey; $i++){
            if(count($arRes) == 0 || $arRes[$i - 1] == 1){
                $arRes[$i] = 0;
            }else{
                $arRes[$i] = 1;
            }
        }
        return $arRes;
    }

    $arrTwoNum = creatBinaryArr(10);

    foreach ($arrTwoNum as $key => $value){
        echo "$key => $value <br>";
    }
    echo "<hr>";



            /* Task four */



     $arRepetion = [1,2,3,4,5,6,7,8,9,10,2,3,4,5,6,7,8];
     $arNoRepetion = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

    function checkRepetionArr($arr){
        for($i = 0; $i < count($arr); $i++){
            for($j = 0; $j < count($arr); $j++){
                if($i == $j){
                    continue;
                }elseif($arr[$i] == $arr[$j]){
                    return "В массиве есть повторяющиеся значения";
                }
            }
        }
        return "В массиве нет повторяющихся значений";
    }
    echo checkRepetionArr($arRepetion)."<br>";
    echo checkRepetionArr($arNoRepetion)."<br>";
    echo "<hr>";



            /* Task five */


    $arSameNum = [1,2,3,4,5,3,4,11,66,77,11];

    function deleteSameNum($arr){
        $arTemp = $arr;
        for($i = 0; $i < count($arr); $i++){
            for($j = 0; $j < count($arr); $j++){
                if($i == $j){
                    continue;
                }elseif($arr[$i] == $arr[$j]){
                    unset($arTemp[$j]);
                }
            }
        }
        return $arTemp;
    }

    echo "До<br>";

    echo "<pre>";
    var_dump($arSameNum);
    echo "</pre>";

    echo "После<br>";

    echo "<pre>";
    var_dump(deleteSameNum($arSameNum));
    echo "</pre>";
    echo "<hr>";



            /* Task six */


    $arRandom = createRandomArr(10, -10, 10);




    echo "До<br>";

    echo "<pre>";
    var_dump($arRandom);
    echo "</pre>";

    function addZero($arr){
        $arTemp = [];
        foreach ($arr as $value){
            if($value < 0){
                $arTemp[] = $value;
                $arTemp[] = 0;
            }else{
                $arTemp[] = $value;
            }
        }
        return $arTemp;
    }

    echo "После<br>";

    echo "<pre>";
    var_dump(addZero($arRandom));
    echo "</pre>";

    echo "<hr>";



                    /* Hard level task */

    // first way

    $arDifferentNumOne = createRandomArr(10, -10, 10);

    echo "Первый способ с помочью функции sort(); <br>";
    sort($arDifferentNumOne);
    echo "<pre>";
    var_dump($arDifferentNumOne);
    echo "</pre>";
    echo "<hr>";

    /* Второй способ не успел*/

?>