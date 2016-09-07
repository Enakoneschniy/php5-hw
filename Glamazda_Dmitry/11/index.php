<?php
    include_once 'db/db_script.php';
    include_once 'function/generator.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home work 11</title>
    <style>
        #insert_field{
            resize: none;
        }
    </style>
</head>
<body>
    <h1>Home work 11</h1>
    <form method="get">
        <h2>Вставте текст</h2>
        <textarea name="insert_field" id="insert_field" cols="40" rows="20"></textarea><br>
        <input type="submit" name="perform" value="Выполнить">
        <?php

        if(!empty($_GET['insert_field'])){
            if(isset($_GET['perform'])){
                echo generate_statistics($_GET['insert_field']);
                add_text($_GET['insert_field']);
            }
        }

        ?>
    </form>
</body>
</html>