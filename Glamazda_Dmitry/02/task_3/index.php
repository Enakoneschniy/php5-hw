<meta charset="UTF-8" />
<?php
    $a = 31;
    $b = 21;
    $c = 31;
    $x;

    if($a < $c){
       $x = $a + $b / $c * $a;
    }else if($a == 10){
        $x = 100;
    }else if($a > $c){
        $x = $c * (3 * $b) + $c * sqrt($c);
    }
    echo $x;
?>