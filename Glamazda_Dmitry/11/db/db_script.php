<?php
    function add_text($text){

        $db = file_get_contents('db/db_text.json');

        $ar = [];

        if($db == ''){

            $ar[] = [
                'id' => 1,
                'text' => $text
            ];
            $json = json_encode($ar);

            file_put_contents('db/db_text.json', $json);

        }else{

            $ar = json_decode($db, true);
            $ar[] = [
                'id' => $ar[count($ar) -1]['id'] + 1,
                'text' => $text
            ];

            $json = json_encode($ar);

            file_put_contents('db/db_text.json', $json);

        }
    }


?>