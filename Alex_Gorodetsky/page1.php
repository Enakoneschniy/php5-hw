<?
  session_start();
   session_register("sess_var");
   $sess_var = "Hello world!";
   echo "The content of \ $sess_var is $sess_var<br>";
?>
<a href = "page2.php"Next page></a>