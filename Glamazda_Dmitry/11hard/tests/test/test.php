<?php

    $db = json_decode(file_get_contents('../../database/db.json'), true);



    function renderQuestion($arr){
        foreach ($arr as $item){
            if ($item['type'] == 'text'){
                echo '<p>'.$item["id"].') '. $item["question"].'</p>';

                echo '<input type="text" name="'.$item['id'].'">';

            }elseif ($item['type'] == 'checkbox'){

                echo '<p>'.$item["id"].') '. $item["question"].'</p>';

                echo '<input type="checkbox" name="'.$item['id'].'[]" value="1">', $item['answer']['Variant_1']['variant'],'<br>';
                echo '<input type="checkbox" name="'.$item['id'].'[]" value="2">', $item['answer']['Variant_2']['variant'],'<br>';
                echo '<input type="checkbox" name="'.$item['id'].'[]" value="3">', $item['answer']['Variant_3']['variant'],'<br>';
                echo '<input type="checkbox" name="'.$item['id'].'[]" value="4">', $item['answer']['Variant_4']['variant'],'<br>';

            }elseif ($item['type'] == 'radio'){

                echo '<p>'.$item["id"].') '. $item["question"].'</p>';

                echo '<input type="radio" name="'.$item['id'].'" value="1">', $item['answer']['Variant_1']['variant'],'<br>';
                echo '<input type="radio" name="'.$item['id'].'" value="2">', $item['answer']['Variant_2']['variant'],'<br>';

            }
        }

    }



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <h1>Test</h1>
    <form method="get">
        <?=renderQuestion($db);?>
        <br>
        <input type="submit" name="CheckTest" value="Проверить тест">
    </form>

    <?php
        function chBoxCheck($arRes, $answer){
            for($i = 0; $i < count($arRes); $i++){
                if($arRes[$i] == $answer) return true;
            }
        }
        if($_GET['CheckTest']){
            $res = 0;
            foreach($db as $item){

                if($item['type'] == 'text'){
                    if($_GET[$item["id"]] == $item["answer"]){
                        $res+=1;
                    }

                }elseif ($item['type'] =='checkbox'){

                    $divider = 0;
                    foreach ($item['answer'] as $variant){
                        if($variant['status'] != null) $divider+=1;
                    }
                    $trueVariants =  1 / $divider;
                    $resultCheckBox = 0;
                    foreach ($item['answer'] as $variant){
                        if(chBoxCheck($_GET[$item["id"]], $variant['status'])) $res += $trueVariants;
                    }
                    $res +=$resultCheckBox;

                }elseif ($item['type'] == 'radio'){

                    foreach ($item['answer'] as $variant){
                        if($_GET['1']||$_GET['2']){
                            if($variant['status'] == $_GET[$item["id"]]) $res +=1;
                        }
                    }

                }

            }
            echo '<br>Вы набрали '.$res.' балов';
        }


    ?>

</body>
</html>