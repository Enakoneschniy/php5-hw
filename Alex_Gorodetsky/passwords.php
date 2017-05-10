<?php
function CreatePassword () {
  $String = "This is the text which will be encrypted so that we may 
  create random and move secure passwords!";
  $Length = 8; // Измените это значение, чтобы установить длину пароля.
  32 символа - максимум.
  $String = md5($String);
  srand ((double) microtime() * 1000000);
  $Begin = rand(0,($StringLength-$Length-1)); // Получить произвольную
  стартовую точку.
  $Password = substr($String, $Begin, $Length);
  print ("Your recommended password is:<P><BIG>$Password</BIG><P>\n");
} // Конец функции CreatePassword.
?>
<HTML>
<HEAD>
<TITLE>Password Generator within a Function</TITLE></HEAD>
<BODY>
<?php
CreatePassword(); У/ Вызов функции.
?>
</BODY>
</HTML>