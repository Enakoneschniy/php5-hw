function create_table($data)
{
   echo "<table border =1>";
   reset($data); // Это используется для указания на начало
   $value = current($data);
   while  ($value)
   {
         echo "<tr><td>$value</td></tr>\n";
       $value = next($data);
   }
    echo "</table>";
}