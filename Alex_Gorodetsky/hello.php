<?php
function GreetUser ($TheUser) {
   print ("Good ");
   if (date("A") == "AM") {
      print ("morning, ");
   } elseif ((date("H") >=12) and (date("H") < 18 )) {
      print ("afternoon, ");
   } else {
      print ("evening, ");
   } // �������� if ����.
      print ("$Username");
      print ("!\n");
} // ����� ������� GreetUser.
?>
<HTML>
<HEAD>
<TITLE>The GreetUser Function</TITLE></HEAD>
<BODY>
<?php
if ($Username) {
   . GreetUser ($Username); // ����� �������.
   } else {
      print ("Please log in.\n");
} // ������� if ����� ������������
?>
</BODY>
</HTML>