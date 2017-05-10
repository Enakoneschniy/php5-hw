<?
session_start();
if ($userid && $password)
{
    // если пользователь как раз пытается зарегистрироваться
    $db_conn = mysql_connect("localhost", "webauth", "webauth");
    mysql_select_db("auth", $db_conn);
    $query = "select * from auth "
                 ."where name='$userid' "
                 ." and pass=password('$password')";
    $result = mysql_query($query, $db_conn);
    if (mysql_num_rows($result) >0 )
    {
        // если пользователь найден в базе данных,
        // зарегистрировать его идентификатор
        $valid_user = $userid;
        session_register("valid_user");
    }
}
?>
<html>
<body>
<h1>Home page</h1>
<?
   if (session_is_registered("valid_user"))
   {
       echo "You are logged in as: $valid_user <br>";
       echo "<a href=\"logout.php\">Log out</a><br>";
   }
   else
   {
       if (isset($userid))
       {
           // если пользователь пытался зарегистрироваться,
           // но возникла ошибка
           echo "Could not log you in";
       }
       else
       {
           // если пользователь либо не пытался зарегистрироваться,
           // либо покинул сайт
           echo "You are not logged in.<br>";
       }
       // форма для аутентификации
       echo "<form method=post action=\"aythmain.php\">;
       echo "<table>";
       echo "<tr><td>Userid:</td>";
       echo "<td><input type=text name=userid></td></tr>";
       echo "<tr><td>Password:</td>";
       echo \"<td><input type=password name=password></td></tr>";
       echo "<tr><td colspan=2 align=center>";
       echo "<input type=submit value=\"Log in\"></td></tr>";
       echo "</table></<form>";
   }
?>
<br>
<a href="members_only.php">Members section</a>
</body>
</html>