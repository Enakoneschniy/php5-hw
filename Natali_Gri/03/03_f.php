//Пример 1:
  <?php
$t ="0";
echo "t = $t ­­ ".gettype($t)."<br>";
$t += 2;
echo "t = $t ­­ ".gettype($t)."<br>";
  $t = $t + 3.5;
  echo "t = $t ­­ ".gettype($t)."<br>";
$t = 5 + "5 поросят"; 
echo "t = $t ­­ ".gettype($t)."<br>";  $t = 5.0 + "5 поросят";
echo "t = $t ­­ ".gettype($t);  ?> 

/**
 * Created by PhpStorm.
 * User: Наташа
 * Date: 27.07.2016
 * Time: 19:45
 */