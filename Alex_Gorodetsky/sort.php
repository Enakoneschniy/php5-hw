<HTML>
<HEAD>
<TITLE>Sorting Arrays</TITLE></HEAD>
<BODY>
<?php
$Grades = array(
    "Richard"=>"95",
    "Sherwood"=>"82",
    "Toni"=>"98",
    "Franz"=>"87",
    "Melissa"=>"75",
    "Roddy"=>"85"
);
print ("Originally, the array looks like
this:<BR>");
for ($n = 0; $n < count($Grades); $n++) {
   $Line = each ($Grades);
   print ("$Line[key]'s grade is
   $Line[value] .<BR>\n");
}
arsort($Grades);
reset($Grades);
print ("<P>After sorting the array by
value using arsort(), the array looks
like this:<BR>");
for ($n= 0; $n < count ($Grades); $n++) {
   $Line= each ($Grades);
   print ("$Line[key]'s grade is $Line[value].<BR>\n");
}
?>
</BODY>
</HTML>