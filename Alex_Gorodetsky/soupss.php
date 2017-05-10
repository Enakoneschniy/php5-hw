<HTML>
<HEAD>
<TITLE>Using Arrays</TITLE></HEAD>
<BODY>
<?php
$Soups = array(
"Monday"=>"Clam Chowder",
"Tuesday"=>"White Chicken Chili",
"Wednesday"=>"Vegetarian"
"Thursday" => "Chicken Noodle"
"Friday" => "Tomato",
"Saturday" => "Cream of Broccoli"
);
for ($n = 0; $n < count($Soups); $n++) {
  $Line = each ($Soups);
  print ("$Line[key]'s soup is $Line[value].<P>\n");
}
?>
</BODY>
</HTML>
