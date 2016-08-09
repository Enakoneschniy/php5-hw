<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    <h1>Task 3</h1>
    <h2>task 3.1</h2>
    <form action="" method="get">
        <lable for="name">Как вас зовут?</lable>
        <input type="text" id="name" name="userName"><br>
        <input type="submit" name="submit">
    </form>

    <?php
        $name = '';
        if($_GET['submit'] && $_GET['userName']){
            $name = $_GET['userName'];
            echo "<p>Привет, $name !</p>";
        }
    ?>




    <hr>
    <h2>task 3.2</h2>
    <form action="" method="get">

        <lable for="name">Как вас зовут?</lable>
        <input type="text" id="name" name="userName"><br>

        <lable for="age">Сколько тебе лет?</lable>
        <input type="number" id="age" name="userAge"><br>

        <textarea name="massage" id="youMassage" cols="40" rows="15"></textarea><br>
        <input type="submit" name="submit">

    </form>

    <?php
        $usrName = '';
        $userAge = 0;
        $userMessage = '';
        if($_REQUEST['submit']&& $_REQUEST['userName']&& $_REQUEST['userAge']&& $_REQUEST['massage']){
            $usrName = htmlspecialchars($_REQUEST['userName']);
            $userAge = $_REQUEST['userAge'];
            $userMessage = htmlspecialchars($_REQUEST['massage']);
            if(htmlspecialchars_decode($userMessage)){
                echo "Привет,". $usrName ." ,". $userAge." лет.<br><p>".$userMessage."</p>";
            }

        }
    ?>



    <hr>
    <h2>task 3.3</h2>

    <?php

        function renderForm(){

                echo '<form action="" method="post">';
                echo '<lable for="age">Сколько тебе лет?</lable>';
                echo '<input type="number" id="age" name="age" value=""><br>';
                echo '<input type="submit" name="ageSubmit">';
                echo '</form>';

        }
        if(!$_REQUEST['age']){
            renderForm();
        }else{
            echo "Вам". $_REQUEST['age']. ' лет!';

        }

    ?>
</body>
</html>