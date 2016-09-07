<?php


function change_string($str){
    $ar_temp = explode(' ', $str);

    for($i = 0; $i < count($ar_temp); $i++){
        if(strlen($ar_temp[$i]) == strlen($ar_temp[$i+1]) && strnatcasecmp($ar_temp[$i], $ar_temp[$i+1]) == 0){
            $ar_temp[$i+1] = '<strong>'. $ar_temp[$i+1] .'</strong>';
        }
    }

    return implode(' ', $ar_temp);
}

$pt_task2 = '/^\*[a-z]+\s\*$/';

$str = '*sex rex*';

$arr = [];
preg_match($pt_task2, $str, $arr);
var_dump($arr);








?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework 10</title>
    <style>
        .wrapper{
            width:900px;
            margin:auto;
        }
        h1, h2{
            text-align: center;

        }
        .task-1{
            text-align: center;
        }
        .examp{
            width:100%;
            overflow: hidden;
            text-align: left;
        }
        .task-1 textarea{
            float: left;
            width:45%;

            text-align: left;
        }
        .res{
            float: right;
            width:45%;
            height:150px;
            border:1px solid #666666;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Home Work</h1>
        <section class="task-1">
            <h2>Выделение повторяющихся слов</h2>
            <form method="post">
                <div class="examp">
                    <textarea name="text_for_chang" id="text_rep" cols="30" rows="10">
                    </textarea>
                    <div class="res">
                        <?php
                            if($_REQUEST['change_text'] && $_REQUEST['text_for_chang']){
                               echo change_string($_REQUEST['text_for_chang']);
                            }
                        ?>
                    </div>
                </div>
                <br>
                <input type="submit" name="change_text">
            </form>


        </section>
        <section class="task-2">
            <h2>Курсив в MarkDown</h2>

        </section>
        <section class="task-3">
            <h2>Доменные имена</h2>
        </section>
        <section class="task-4">
            <h2>Исправление пробелов</h2>
        </section>
        <section class="task-5">
            <h2>Регулярное выражение для регулярного выражения</h2>
        </section>
    </div>
</body>
</html>