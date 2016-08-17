<html>
<head>
    <title>Страница с вводом имени и возраста </title>
</head>
<body>

<form method="post" action="index.php">Заполняем поля :<br><br>
    Укажите Ваше имя: <input name="user_name" type="text" maxlength="20" size="25" value="" />
    <br><br> Укажите Ваш возраст: <input name="age" type="text" maxlength="2" size="3" value="" />
    <br><br> <input type=submit value="Передать информацию"></form>
</body>
</html>

<?php

if (!empty($_POST["user_name"])&&!empty($_POST["age"]))
{
    echo "Получены новые данные:<br>";
    echo "Привет, ";
    echo $_POST["user_name"];

    echo $_POST["age"];
    echo " лет";
}
else
{
    echo "Переменные не дошли.";
}

?>



