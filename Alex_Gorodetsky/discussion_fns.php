function expand_all(&$expanded)
{
    // пометка всех цепочек с дочерними цепочками для отображения
    // их в раскрытом виде
    $conn = db_connect();
    $query = "select postid from header where children = 1";
    $result = mysql_query($query);
    $num = mysql_num_rows($result);
    for($i = 0; $i<$num; $i++)
    {
        $expanded[mysql_result($result, $i, 0)]=true;
    }
}

function get_post($postid)
{
    // извлечение одного сообщения из базы данных и возврат его в виде массива

    if(!$postid) return false;

    $conn = db_connect();

    // получение всей информации заголовка из 'header'
    $query = "select * from header where postid = $postid";
    $result = mysql_query($query);
    if(mysql_numrows($result)!=1)
        return false;
    $post = mysql_fetch_array($result);

    // получение сообщения из тела и добавление его к предыдущему результату
    $query = "select * from body where postid = $postid";
    $result2 = mysql_query($query);
    if (mysql_numrows($result2)>0)
    {
        $body = mysql_fetch_array($result2);
        if($body)
        {
            $post['message'] = $body['message'];
        }
    }
    return $post;
}

function get_post_title($postid)
{
    // извлечение названия одной статьи из базы данных
    if(!$postid) return "";
    $conn = db_connect();
    // получение всей информации заголовка из 'header'
    $query = "select title from header where postid = $postid";
    $result = mysql_query($query);
    if(mysql_numrows($result)!=1)
        return "";
    return mysql_result($result, 0, 0);
}

function get_post_message($postid)
{
    // извлечение сообщения одной статьи из базы данных
    if(!$postid) return "";
    $conn = db_connect();
    $query = "select message from body where postid = $postid";
    $result = mysql_query($query);
    if(mysql_numrows($result)>0)
    {
        return mysql_result($result, 0, 0);
    }
}

function add_quoting($string, $pattern = "> ")
{
    // добавление символа цитаты для пометки текста,
    // процитированного в ответе
    return $pattern.str_replace("\n", "\n$pattern", $string);
}

function store_new_post($post)
{
    // проверка подлинности и сохранение новой статьи

    $conn = db_connect();
    // проверка, что никакие поля не оставлены пустыми
    if(!filled_out($post))
        return false;

    $post = clean_all($post);

    // проверка существования родительской статьи
    if($post["parent"]!=0)
    {
        $query = "select postid from header where postid =
                  '".$post['parent']."'";
        $result = mysql_query($query);
        if(mysql_numrows($result)!=1)
        {
            return false;
        }
    }

    // проверка, что статья не является дубликатом
    $query = "select header.postid from header, body where
                header.postid = body.postid and
                header.parent = ".$post['parent']." and
                header.poster = '".$post['poster']."' and
                header.title = '".$post['title']."' and
                header.area = ".$post['area']." and
                body.message = '".$post['message']."'";
    $result = mysql_query($query);
    if (!$result)
    {
        return false;
    }
    if(mysql_numrows($result)>0)
        return mysql_result($result, 0, 0);

    $query = "insert into header values
                 ('".$post['parent']."',
                 '".$post['poster']."',
                 '".$post['title']."',
                 0,
                 '".$post['area']."',
                 now(),
                 NULL
                 )";
    $result = mysql_query($query);
    if (!$result)
    {
        return false;
    }

    // обратите внимание, что теперь родительская статья
    // имеет дочернюю статью
    $query = "update header set children = 1 where postid =
      ".$post['parent'];
    $result = mysql_query($query);
    if (!$result)
    {
        return false;
    }

    // выяснение идентификатора данной статьи. Обратите внимание,
    // что может существовать несколько практически идентичных заголовков,
    // различающихся только идентификатором и, возможно, временем отправки.
    $query = "select header.postid from header left
                 join body on header.postid = body.postid
                          where parent = '".$post["parent"]."'
                          and poster = '".$post["poster"]."'
                          and title = '".$post["title"]."'
                          and body.postid is NULL";
    $result = mysql_query($query);
    if (!$result)
    {
        return false;
    }
    if(mysql_numrows($result)>0)
        $id = mysql_result($result, 0, 0);

    if($id)
    {
        $query = "insert into body values ($id, '".$post["message"]."')";
        $result = mysql_query($query);
        if (!$result)
        {
            return false;
        }
        return $id;
    }
}