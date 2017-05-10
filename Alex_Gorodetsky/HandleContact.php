<HTML>
<HEAD>
<TITLE>Contact Information Request</TITLE></HEAD>
<BODY>
<FORM ACTION="HandleContact2.php" Method=POST>
<?php
// Передача принятого значения с помощью поля INPUT типа HIDDEN.
print ("<INPUT TYPE=HIDDEN NAME=\"FirstName\",
VALUE=\"$FirstName\">\n");
print ("<INPUT TYPE=HIDDEN NAME=\"LastName\".
VALUE=\"$LastName\">\n");
print ("<INPUT TYPE=HIDDEN NAME=\"Comments\" VALUE=\"$Comments\">\n");
print("<INPUT TYPE=HIDDEN NAME=\"ContactHow\"
VALUE=\"$ContactHow\">\n");

switch ($ContactHow) {
   case "Telephone":
      print ("<B>Please enter a daytime phone number where you can be
      reached:</B><BR>\n");
      print ("<INPUT TYPE-TEXT NAME=\"Telephone\" SIZE=10><BR>v");
      print ("<INPUT TYPE=SUBMIT NAME=SUBMIT VALUE=\"Continue\">\n");
      break;
   case "Mail":
      print ("<B>Please enter your complete mailing address:</>
      <BR>\n");
      print("<TEXTAREA NAME=\"MailAddress\" ROWS=5 COLS=40>
      <TEXTAREA><BR>\n");
      print ("<INPUT TYPE=SUBMIT NAME=SUBMIT VALUE=\"Continue\">\n");
      break;
   case "Fax":
      print ("<B>Please enter your Fax number:</B><BR>\n");
      print ("<INPUT TYPE=TEXT NAME=\"Fax\" SIZE=10><BR>\n");
      print ("<INPUT TYPE=SUBMIT NAME=SUBMIT VALUE=\"Continue\">\n");
      break;
   default:
      print ("<B>Please go back and select how you would prefer to be
      contacted!</B><BR>\n");
      break;
}
?>
</FORM>
</BODY>
</HTML>