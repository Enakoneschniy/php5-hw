<?php
function GreetUser ($TheUser) {
   print ("Good ");
   if (date("A") == "AM") {
      print ("morning, ");
   } elseif ((date("H") >=12) and (date("H") < 18 )) {
      print ("afternoon, ");
   } else {
      print ("evening, ");
   } // Закрытие if даты.
      print ("$Username");
      print ("!\n");
} // Конец функции GreetUser.
?>
<HTML>
<HEAD>
<TITLE>The GreetUser Function</TITLE></HEAD>
<BODY>
<?php
if ($Username) {
   . GreetUser ($Username); // Вызов функции.
   } else {
      print ("Please log in.\n");
} // Закрыть if имени пользователя
?>
</BODY>
</HTML>