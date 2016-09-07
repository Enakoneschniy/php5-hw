<?php
include_once '../../database/db_script.php';

function checkStatus($elem, $num){
    for($i = 0; $i < count($elem); $i++){
        if($elem[$i] == $num){
            return $num;
        }
        continue;
    }
    return null;
}

if($_GET['oneAnswer']){

    if($_GET['question'] && $_GET['answer']){
        addQuestion('text', $_GET['question'], $_GET['answer']);
    }

}elseif ($_GET['checkBoxAnswer']){

    if($_GET['question']&&$_GET['answer']){

            $arAnswers = [
                'Variant_1'=>[
                    'status' => checkStatus($_GET['answer'], '1'),
                    'variant' => $_GET['description1']
                ],
                'Variant_2'=>[
                    'status' => checkStatus($_GET['answer'], '2'),
                    'variant' => $_GET['description2']
                ],
                'Variant_3'=>[
                    'status' => checkStatus($_GET['answer'], '3'),
                    'variant' => $_GET['description3']
                ],
                'Variant_4'=>[
                    'status' => checkStatus($_GET['answer'], '4'),
                    'variant' => $_GET['description4']
                ]
            ];
            addQuestion('checkbox', $_GET['question'], $arAnswers);

        }else echo 'Не указаны верные варианты','<br>';

}elseif ($_GET['radioButtonAnswer']){

       if($_GET['browser'] && $_GET['question']){

           $arAnswers = [
               'Variant_1'=>[
                   'status' => $_GET['browser'] == '1'? $_GET['browser'] : null,
                   'variant' => $_GET['description1']
               ],
               'Variant_2'=>[
                   'status' => $_GET['browser'] == '2'? $_GET['browser'] : null,
                   'variant' => $_GET['description2']
               ],

           ];

           addQuestion('radio', $_GET['question'], $arAnswers);

        }else echo 'Не указаны верные варианты','<br>';

}
echo '<a href ="add_test.html">Добавить новый</a><br>';
echo '<a href ="../test/test.php">Пройти тест</a><br>';
