<body>
<table border = 0 cellpadding = 3>
<tr>
  <td bgcolor = "#CCCCCC" align = center>Distance</td>
  <td bgcolor = "#CCCCCC" aling = center>Cost</td>
</tr>
<?
$distance = 50;
while ($distance <= 250 )
{
  echo "<tr>\n  <td aling = right>$distance</td>\n";
  echo "  <td aling = right>". $distance / 10 ."</td>\n</tr>\n";
  $distance += 50;
}
?>
</table>
</body>
</html>