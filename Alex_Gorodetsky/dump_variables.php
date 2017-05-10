<?
    // в этих строках вывод форматируется в виде HTML-
    // комментариев и последовательно вызывается массив

    echo "\n<!-- BEGIN VARIABLE DUMP -->\n\n";

    echo "\n<!-- BEGIN GET VARS -->\n";
    echo "\n<!-- ".dump_array($HTTP_GET_VARS)." -->\n";

    echo "\n<!-- BEGIN POST VARS -->\n";
    echo "\n<!-- ".dump_array($HTTP_POST_VARS)." -->\n";

    echo "\n<!-- BEGIN SESSION VARS -->\n";
    echo "\n<!-- ".dump_array($HTTP_SESSION_VARS)." -->\n";

    echo "\n<!-- BEGIN COOKIE VARS -->\n";
    echo "\n<!-- ".dump_array($HTTP_COOKIE_VARS)." -->\n";

    echo "\n<!-- END VARIABLE DUMP -->\n";

// dump_array() принимает массив в качестве параметра
// функция выполняет проход по нему, создавая строку для
// представления массива в качестве набора элементов

function dump_array($array)
{
    if(is_array($array))
    {
        $size = count($array);
        $string = "";
        if($size)
        {
            $count = 0;
            $string .= "{ ";
            // добавление ключа и значения каждого элемента в массив
            foreach($array as $var => $value)
            {
                $string .= "$var = $value";
                if($count++ < ($size-1))
                {
                    $string .= ", ";
                }
            }
            $string .= " }";
        }
        return $string;
    }
    else
    {
        // если параметр не является массивом, он просто возвращается
        return $array;
    }
}
?>