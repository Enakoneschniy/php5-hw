<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>HTTP Request</title>
    </head>
<body>
    <form method="post">

           <p>
               <label for="size">First size Matix</label>
               <input type="text" name="size" id="size" value="<?=isset($_REQUEST['size']) ? $_REQUEST['size'] : ''?>">
               <input type="checkbox" name="checkSize" value="on">

           </p>
                <p>
                    <label for="size">Second size Matrix</label>
                    <input type="text" name="size2" id="size2" value="<?=isset($_REQUEST['size2']) ? $_REQUEST['size2'] : ''?>">
                    <input type="checkbox" name="checkSize2" value="on">
                </p>
                    <p>
                        <input type="submit" name="submit" value="Generate">
                    </p>
        </form>

    <?php

        echo "REQUEST";
        echo "<pre>";
        var_dump($_REQUEST);
        echo"</pre>";

       if($_REQUEST['submit']) {
           if ($_REQUEST['size']) {
                   for ($row = 1; $row <= intval($_REQUEST['size']); $row++) {
                       echo "<br>";
                       for ($cell = 1; $cell <= intval($_REQUEST['size']); $cell++) {
                           $array[$_REQUEST['size']] = $row * $cell;
                           foreach ($array as $var){
                               if ($_REQUEST["checkSize"] == "on"){
                               print_r($var);
                               }else{
                                   print_r(" ");
                               }
                           }
                       }
                   }
                }

            }


            echo "<hr>";

       if($_REQUEST['submit']) {
           if ($_REQUEST['size2']) {
                    for ($row = 0; $row < intval($_REQUEST['size2']); $row++) {
                         echo "<br>";
                         for ($cell = 0; $cell < intval($_REQUEST['size2']); $cell++) {
                             if ($_REQUEST["checkSize2"] == "on"){
                             if ($row == $cell) {
                                 echo 1, " ";
                             }elseif (($row + $cell) == (intval($_REQUEST['size2']) - 1)) {
                                 echo 2, " ";
                             }elseif (($row < $cell) && ($cell + $row) < (intval($_REQUEST['size2']) - 1)) {
                                 echo 3, " ";
                             }elseif (($row > $cell) && ($cell + $row) > (intval($_REQUEST['size2']) - 1)){
                                 echo 5, " ";
                             }elseif (($row > $cell) && ($cell + $row) < (intval($_REQUEST['size2']) - 1)){
                                 echo 6, " ";
                             }elseif (($row < $cell) && ($cell + $row) > (intval($_REQUEST['size2']) - 1)){
                                 echo 4, " ";
                             }
                         }else{
                                 print_r(" ");
                             }
                    }

                }


}
       }
echo "<hr>";
?>

    <form method="post">

        <p>
            <label for="size">User's name</label>
            <input type="text" name="userName" id="userName" value="<?=($_POST["userName"])?>">

        </p>
        <p>
            <label for="size">User's age</label>
            <input type="text" name="userAge" id="userAge" value="<?=($_POST['userAge'])?>">
        </p>
        <p>
            <label for="size">Please enter yuor message</label>
            <textarea rows = "10" cols = "40" required name = "userMessage" value="<?= $_POST["userMessage"]?>"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Generate">
        </p>


    </form>
<?php
    if($_POST["userName"]) {
        echo "Привет,", " ", $_POST["userName"], ",";
    }
        if($_POST['userAge']){
             echo " ", $_POST['userAge'], " ", "лет.";
    }
                if($_POST["userMessage"]){
                    echo "<br/>", "Твое сообщение:", " ", $_POST["userMessage"];
            }
?>
