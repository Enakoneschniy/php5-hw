<?php $t = "Всем"; // переменной t присваиваем значение "Всем" 
$$t ="привет!";// Переменной "Всем" присваиваем значение "привет!" 
echo "$$t ".$$t."<br>";
echo "$t ${$t}<br>";
echo "$t $Всем";


$t1=96;
$t2=&$t1;
echo "t1 = =$t1; t2 = $t2";
$t1=315;
$a = 3;
$b = 4;
$x =$a==$b;

echo "$x<br>";
"<br>";
echo "$b<br>";

if($a>$b||$b>5){ echo "$a>$b<br>";
}else{echo "  by<br>";}
if($a>$b||$b==5){ echo '$a>$b<br>';
}else{echo "  by<br>";}
//&& - и ||-или

echo"<hr>";
if($a>$b||$b>5):
    echo "$a>$b<br>";
else: echo "  b555y<br>";
endif;
if (true){
    echo "true.....";
}
else
    echo "false...";

?> 
//&& - и ||-или
