<?
// подключаемые файлы функций
require_once("bookmark_fns.php");
session_start();
$old_user = $valid_user; // сохранить на случай, если кто-то входил в систему
$result_unreg = session_unregister("valid_user");
$result_dest = session_destroy();

// запуск выводимого HTML-кода
do_html_header ("Logging Out");
if (!empty($old_user))
{
    if ($result_unreg && $result_dest)
    {
        // пользователь вошел в систему и теперь выходит из нее
        echo "Logged out.<br>";
        do_html_url("login.php", "Login");
    }
    else
    {
        // пользователь вошел в систему и не может выйти из нее
        echo "Could not log you out.<br>";
    }
}
else
{
    // пользователь не вошел в систему,
    // но каким-то образом умудрился
    // открыть эту страницу
    echo "You were not logged in, and
    so have not been logged out.<br>";
    do_html_url("login.php", "Login");
}
do_html_footer();
?>