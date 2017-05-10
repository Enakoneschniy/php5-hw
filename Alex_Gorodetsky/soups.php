<HTML>
<HEAD>
<TITLE>Using Arrays</TITLE></HEAD>
<BODY>
<?php
$Soups = array(
"Monday"=>"Clam Chowder", "Tuesday"=>"White Chicken Chili",
"Wednesday"=>"Vegetarian"
);
$HowMany = count($Soups);
print ("The \$Soups array contains $HowMany elements.<P>\n");
$Soups2 = array(
"Thursday" => "Chicken Noodle"
"Friday" => "Tomato",
"Saturday" => "Cream of Broccoli"
);
$HowMany2 = count($Soups2);
print ("The \$Soups2 array contains $HowMany2 elements.<P>\n");
$TheSoups = array_merge ($Soups, $Soups2);
$HowMany3 = count($TheSoups);
print ("The \$TheSoups array contains $HowMany3 elements.<P>\n");
?>
</BODY>
</HTML>