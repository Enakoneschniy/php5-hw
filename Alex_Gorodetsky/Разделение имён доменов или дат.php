$domain = "yallara.cs.rmit.edu.au";
$arr = split ("\.", $domain);
while (list($key, $value) = each ($arr))
   echo "<br>".$value