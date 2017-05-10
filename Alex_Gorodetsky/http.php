<?
// Если используется сервер IIS, потребуется установить переменные
// среды $PHP_AUTH_USER и $PHP_AUTH_PW
if (substr($SERVER_SOFTWARE, 0, 9) == "Microsoft"  SS
     !isset($PHP_AUTH_USER) &&
     !isset($PHP_AUTH_PW) &&
     substr($HTTP_AUTHORIZATION, 0, 6) == "Basic  "

{
    list($PHP_AUTH_USER, $PHP_AUTH_PW) =
        explode(":",base64_decode(substr($HTTP_AUTHORIZATION,6)));
}
// Замените этот оператор if запросом к базе данных или чем-то подобным
if ($PHP_AUTH_USER !="user" | $PHP_AUTH_PW != "pass")
{
    // Посетитель еще не передал деталей или его
    // имя и пароль неправильные
    header('WWW-Authenticate:Basic realm="Realm-Name" ');
    if (substr($SERVER_SOFTWARE, 0, 9) == "Microsoft")
        header("Status: 401 Unauthorized");
    else
        header("HTTP/1.0 401 Unauthorized");

    echo "<h1>Go Away!</h1>";
    echo "You are not authorized to view this resource.";
}
else
{
    // посетитель предоставил правильную информацию
    echo "<h1>Here it is!</h1>;
    echo "<p>I bet you are glad you can see this secret page.";
}
?>