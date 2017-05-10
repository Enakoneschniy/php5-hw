<?
    include ('include_fns.php');

    if(!$area)
        $area = 1;
    if(!$error)
    {
        if(!$parent)
        {
            $parent = 0;
            if(!$title)
                $title = "New Post";
        }
        else
        {
            // получение названия статьи
            $title = get_post_title($parent);

            // добавление префикса Re:
            if(strstr($title, "Re: ") == false)
                $title = "Re: ".$title;

            // проверка, что заголовок по-прежнему помещается в базе данных
            $title = substr($title, 0, 20);

            // добавление цитаты из статьи, на которую дается ответ
            $message = add_quoting(get_post_message($parent));
        }
    }
    do_html_header("$title");

    display new_post_form($parent, $area, $title, $message, $name);

    if ($error)
        echo "Your message was not stored. Make sure you have filled in
                all fields and try again.";
    do_html_footer();
?>