<?
    // функция обработки ошибок
function myErrorHandler ($errno, $errstr)
    {
        echo "<br><table bgcolor= ' #cccccc'><tr><td>
              <B>ERROR:</B> $errstr
              <P>Please try again, or contact us and tell us that
              the error occured in line ".__LINE__." of file '".__FILE__."'";
        if ($errno == E_USER_ERROR||$errno == E_ERROR)
        {
            echo "<P>This error was fatal, program ending";
            echo "</td></<tr></tr></table>";
            // Закрыть открытые ресурсы, включая колонтитул страницы и т.п.
            exit;
        }
        echo "</td></tr></table>";
    }
    // Установка обработчика ошибок
set_error_handler("myErrorHandler");

//Генерирование различных уровней ошибок
trigger_error("Trigger function called", E_USER_NOTICE);
fopen("nofile", "r");
trigger_error("This computer is beige", E_USER_WARNING);
include ("nofile");
trigger_error("This computer will self destruct in 15 seconds", E_USER_ERROR);
?>