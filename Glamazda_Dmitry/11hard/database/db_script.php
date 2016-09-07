<?php

function addQuestion($type, $question, $answer){
    $db = file_get_contents('../../database/db.json');
    $ar = [];
    if($db == ''){

        $ar[] = [
            'id' => 1,
            'type' => $type,
            'question' => $question,
            'answer' => $answer
        ];
        $json = json_encode($ar);

        file_put_contents('../../database/db.json', $json);

    }else{

        $ar = json_decode($db, true);
        $ar[] = [
            'id' => $ar[count($ar) -1]['id'] + 1,
            'type' => $type,
            'question' => $question,
            'answer' => $answer
        ];

        $json = json_encode($ar);

        file_put_contents('../../database/db.json', $json);

    }
}

