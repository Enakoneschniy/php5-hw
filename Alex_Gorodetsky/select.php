<HTML>
<HEAD>
<TITLE>Select Menu</TITLE></HEAD>
<BODY>
<?php
$Year = date ("Y");
// —оздание формы.
print ("<FORM ACTION=\"$PHP_SELF\" METHOD=POST>\n");
// —оздание меню дл€ выбора мес€ца.
print ("Select a month:<BR>\n");
print ("<SELECT NAME=Month><OPTION>Choose One</OPTION>\n");
print ("OPTION VALUE=January>January</OPTION>\n");
print ("OPTION VALUE=February>February</OPTION>\n");
print ("OPTION VALUE=March>March</OPTION>\n");
print ("OPTION VALUE=April>April</OPTION>\n");
print ("OPTION VALUE=May>May</OPTION>\n");
print ("OPTION VALUE=June>June</OPTION>\n");
print ("OPTION VALUE=July>July</OPTION>\n");
print ("OPTION VALUE=August>August</OPTION>\n");
print ("OPTION VALUE=September>September</OPTION>\n");
print ("OPTION VALUE=October>October</OPTION>\n");
print ("OPTION VALUE=November>November</OPTION>\n");
print ("OPTION VALUE=December>December</OPTION>\n");
print ("</SELECT>\n");
// —оздание меню дл€ вывода дн€.
print ("<P>Select a day:<BR>\n");
print ("<SELECT NAME=Day><OPTION>Choose One</OPTION>\n");
$Day = 1;
while ($Day <= 31) {
   print ("<OPTION VALUE=$Day>$Day</OPTION>\n");
   $Day++;
}
print ("</SELECT>\n");
// —оздание меню дл€ вывода года.
print ("<P>Select a year:<BR>\n");
print ("<SELECT NAME=Year><OPTION>Choose One</OPTION>\n");
$EndYear = $Year + 10;
   while ($Year <= $EndYear) {
   print ("<OPTION VALUE=$Year>$Year</OPTION>\n");
   $Year++;
}
print ("</SELECT>\n");
print ("<P><INPUT TYPE=SUBMIT NAME=SUBMIT VALUE=\"Go!\"></FORM>\n");
?>
</BoDY>
</HTML>