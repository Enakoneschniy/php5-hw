<meta charset="UTF-8" />
<?php
    $a = 31;
    $b = 21;
    $c = 31;
    $row;

    if($a < $c){
       $row = $a + $b / $c * $a;
    }else if($a == 10){
        $row = 100;
    }else if($a > $c){
        $row = $c * (3 * $b) + $c * sqrt($c);
    }
    echo $row;
?>