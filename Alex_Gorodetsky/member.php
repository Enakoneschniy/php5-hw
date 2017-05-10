<?
// подключаемые файлы функций для данного приложения
require_once ("bookmark_fns.php");
session_start();

if ($username && $passwd)
// пользователь только что попытался войти в систему
{
    if (login($username, $passwd))
    {
        // если пользователь записан в базе данных,
        // зарегистрировать его идентификатор
        $valid_user = $username;
        session_register("valid_user");
    }
    else
    {
        // неуспешная попытка входа в систему
        do_html_header("Problem:");
        echo "You could not be logged in.
              You must be logged in to view this page.";
        do_html_url("login.php","Login");
        do_html_footer();
        exit;
    }
}
do_html_header("Home");
check_valid_user();
// отображение закладок, сохраненных пользователем
if ($url_array = get_user_urls($valid_user));
   display_user_urls($url_array);

// отображение меню
diplay_user-menu();

do_html_footer();

?>