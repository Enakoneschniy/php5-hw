<?

// подключение файлов йункций
require_once(book_sc_fns.php);
session_start();

if ($username && $passwd)
// пользователь только что попытался войти в систему
{
    if (login($username, $passwd))
    {
        // зарегистрировать идентификатор пользователя,
        // если он содержится в базе данных
        $admin_user = $username;
        session_register("admin_user");
    }
    else
    {
        // неуспешная попытка входа в систему
        do_html_header("Problem:");
        echo "You could not be logged in.
                You must be logged in to view this page.<br>";
        do_html_url("login,php", "Login");
        do_html_footer();
        exit;
    }
}

do_html_header("Administration");
if (check_admin_user())
    display admin_menu();
else
    echo "You are not authorized to enter the administration area.";
do_html_footer();
?>
