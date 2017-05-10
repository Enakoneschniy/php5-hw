<HTML>
<HEAD>
<TITLE>Prime Numbers</TITLE></HEAD>
<BODY>
<?php
// Если вы хотите напечатать больше простых
чисел, измените это значение.
for ($n = 1; $n <= 1000; $n++) {
   if (($n == 1) OR ($n == 2) OR ($n == 3)
   OR ($n == 5)) {
      print("$n<BR>\n");
   } elseif (($n Ч 2 1- 0) AND ($n % 3 != 0)
   AND ($n Ч 5 != 0)) {
      print ("$n<BR>\n");
   } // Закрытие IF.
  } // Закрытие FOR.
?>
</BODY>
</HTML>