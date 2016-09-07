<?php
    $size = 0;
    function rendArr($arr){
        echo '<div>';
        foreach ($arr as $key => $val){
            echo '<div class="wrapper-row">';
            foreach ($arr[$key] as $item){
                echo "<span>".$item ."<span><br>";
            }
            echo "</div>";
        }
        echo "</div><div class='clear'></div>";
    }


    function createMultiplicationArr($size){
        $arr = [];
        for($row = 1; $row <= $size; $row++){
            for($cell = 1; $cell <= $size; $cell++){
                $arr[$row][$cell] = $row*$cell;
            }
        }
        return $arr;
    }



    function createIdentityMatrix($size){
        $arr = [];
        for($row = 1; $row <= $size; $row++){
            for($cell = 1; $cell <= $size; $cell++){
                if ($row == $cell) {
                    $arr[$row][$cell] = 1;
                }elseif($row + $cell == $size + 1){
                    $arr[$row][$cell] = 2;
                }elseif($row + $cell < $size+2 && $row < $cell){
                    $arr[$row][$cell] = 6;
                }elseif($row + $cell >= $size + 2 && $row < $cell){
                    $arr[$row][$cell] = 5;
                }elseif($row + $cell >= $size + 2 && $row > $cell){
                    $arr[$row][$cell] = 4;
                }elseif($row + $cell <= $size + 2 && $row > $cell){
                    $arr[$row][$cell] = 3;
                }else{
                    $arr[$row][$cell] = $row * $cell;
                }
            }
        }
        return $arr;
    }


    function createPascalMatrix($size){
        $arr = [];
        for($row = 1; $row <= $size; $row++){
            for($cell = 1; $cell <= $size; $cell++){
                if($row <= $cell && $row == $cell || $row == 1){
                    $temp = 1;
                }elseif($row <= $cell){
                    $temp = $arr[$row][$cell-1]+$arr[$row-1][$cell-1];
                }else{
                    $temp = " ";
                }
                $arr[$row][$cell] =$temp;
            }
        }
        return $arr;
    }

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div.wrapper-row{
            float: left;
            width:40px;
        }
        span{
            padding:10px 5px;
            height:10px;
        }
        div.clear{
            clear: both;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <lable for="size">Введите размер таблицы</lable>
        <input id="size" type="number" name="size"><br>
        <input type="submit" name="submit" value="generate">
    </form>
</body>
</html>



<?php
    if($_GET['submit']){
        $size = $_GET['size'];
        if($_GET['size']) {
            rendArr(createMultiplicationArr($size));
            rendArr(createIdentityMatrix($size));
            rendArr(createPascalMatrix($size));
        }
    }
?>