<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home work</title>
    <style>
        form{
            float: left;
            height:300px;
            width:200px;
            padding:10px;
            margin:10px;
            border: 1px solid #666;
        }
        h2{
            width:100px;
        }
        input, lable{
            margin-left:10px;
        }
        .output-1, .output-2{
            padding:10px;
            margin:10px;
            height:50px;
            width:160px;
            border: 1px solid #666;
        }
        .no-bottom{
            border-bottom: 0;
        }

    </style>
</head>
<body>


    <form method="get" action="">
        <h2>Task one</h2>
        <lable for="distance">Растояние</lable>
        <input type="text" id="distance" name="distance"><br>

        <lable for="time">Время</lable>
        <input type="text" id="time" name="time"><br>

        <lable for="m-h">М/ч</lable>
        <input name="radiobutton" type="radio" value="m" id="m-h">

        <lable for="km-h">Kм/ч</lable>
        <input name="radiobutton" type="radio" value="km" id="km-h">


        <input type="submit" name="get_speed" value="count up">

        <div class="output-1">
            <?php
            /* Task one */
            function check_form($submit, $distance, $time, $speed_type){
                if($submit && ctype_digit($distance) && ctype_digit($time) && $speed_type){
                    return true;
                }else{
                    return false;
                }
            }


            function check_speed_type($speed_type){
                if ($speed_type == "m"){
                   return true;
                }elseif($speed_type == "km"){
                   return false;
                }
            }



            function getSpeed($distance, $time){
                return $distance / $time;
            }



            if(check_form($_REQUEST['get_speed'], $_REQUEST['distance'], $_REQUEST['time'], $_REQUEST['radiobutton'])){
                if(check_speed_type($_REQUEST['radiobutton'])){
                    echo getSpeed($_REQUEST['distance'], $_REQUEST['time'])*1000 . ' М/ч';
                }else{
                    echo getSpeed($_REQUEST['distance'], $_REQUEST['time']) . ' Км/ч';
                }
            }else{
                echo "Данные введены неверно";
            }



            ?>
        </div>
    </form>



    <form method="get" action="">
        <h2>Task two</h2>
        <lable for="fact-value">Число:</lable>
        <input type="text" id="fact-value" name="number"><br>
        <input type="submit" id="get_fact" value="count up" name="get_fact">

        <div class="output-2">
            <?php
            /* Task two */

            function get_fact($num){
                if($num == 1){
                    return $num;
                }
                return $num * get_fact($num -1);
            }
            if($_REQUEST['get_fact'] && ctype_digit($_REQUEST['number']) && $_REQUEST['number']){
                echo "Факториал ". $_REQUEST['number']. " равен "   .get_fact($_REQUEST['number']);
            }


            ?>
        </div>
    </form>


    <form class="no-bottom" method="get" action="">
        <h2>Task three</h2>
        <lable for="arrLenght">Виличина массива: </lable>
        <input type="text" id="arrLenght" name="arrLenght"><br>
        <input type="submit" id="get_arr" value="count up" name="getArr">

        <div>
            <?php
            /* Task three */

            function getArr($arLenght){
                $arr = [];
                for($i = 0;$i < $arLenght;$i++){
                    $arr[$i] = rand(-50, 50);
                }
                return $arr;
            }
            if(ctype_digit($_REQUEST['arrLenght'])&&$_REQUEST['getArr']){
                $arr = getArr($_REQUEST['arrLenght']);
                foreach ($arr as $key=>$val){
                    echo $key. ' => ' .$val.'<br>';
                }
            }else{
                echo "Введите данные согласно усовиям";
            }



            ?>
        </div>
    </form>

    <form class="no-bottom" method="get" action="">
        <h2>Task four</h2>
        <lable for="arrTwoLenght">Виличина двух массивов: </lable>
        <input type="text" id="arrTwoLenght" name="arrTwoLenght"><br>
        <input type="submit" id="getSumArr" value="sum up" name="getSumArr">

        <div>
            <?php
            function getSum($arrOne, $arrTwo){
                $res = [];
                foreach ($arrOne as $key=>$val){
                    $res[$key] = $arrOne[$key] + $arrTwo[$key];
                }
                return $res;
            }

            if(ctype_digit($_REQUEST['arrTwoLenght']) && $_REQUEST['getSumArr']){
                $arOne = getArr($_REQUEST['arrTwoLenght']);
                $arTwo = getArr($_REQUEST['arrTwoLenght']);
                echo "<br> Первый массив <br>";
                var_dump($arOne);
                echo "<br> Второй массив <br>";
                var_dump($arTwo);
                echo "<br> сумма массивов <br>";
                var_dump(getSum($arOne, $arTwo));
            }else{
                echo "Введите данные согласно усовиям";
            }
            ?>
        </div>
    </form>

</body>
</html>


