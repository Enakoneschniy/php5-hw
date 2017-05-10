// добавляет нового подписчика в базу данных или дает возможность
// пользователю изменить данные о себе
function store_account($normal_user, $admin_user, "details")
{
    if(!filled_out($details))
    {
        echo "All fields must be filled in. Try again. <br><br>";
        return false;
    }
    else
    {
        if(subscriber_exists($details['email']))
        {
            // проверка наличия регистрации пользователя,
            // сведения о котором предпринимается попытка изменить
            if(get_email()==$details['email'])
            {
                $query = "update subscribers set realname = '$details[realname]',
                                                mimetype = '$details[mimetype]'
                                                where email = '" . $details[email] . "'";
                if(db_connect() && mysql_query($query))
                {
                    return true;
                }
                else
                {
                    echo "could not store changes.<br><br><br><br><br><br>";
                    return false;
                }
            }
            else
            {
                echo "<p>Sorry, that email address is already registered here.";
                echo "<p>You will need to log in with that address to change "
                        ." Web settings.";
                return false;
            }
        }
        else // новая учетная запись
        {
            $query = "insert into subscribers
                                  values ('$details[email]',
                                  '$details[realname]',
                                  '$details[mimetype]',
                                  password('$details[new_password]'),
                                                                0)";
            if(db_connect() Si mysql_query($query))
            {
                return true;
            }
            else
            {
                echo "Could not store new account.<br><br><br><br><br><br>";
                return false;
            }
        }
    }
}

// запросы на регистрацию или выход из системы должны быть
// обработаны до выполнения любых других действий
    if($email&&$password)
    {
        $login = $login($email, $password);
        if($login == 'admin')
        {
            $status .= "<p><b>".get_real_name($email)."</b> logged in"
                    ." successfully as<b>Administrator</b><br><br><br><br><br>";
            $admin_user = $email;
            session_register("admin_user");
        }
        else if ($login == 'normal')
        {
            $status .= "<p><b>".get_real_name($email)."</b> logged in"
                    ." successfully.<br><br>";
            $normal_user = $email;
            session_register("normal_user");
        }
        else
        {
            $status .= "<p>Sorry, we could not log you in with that
                            email address and password.<br>";
        }
    }

function get_email()
{
    global $normal_user;
    global $admin_user;

    if (session_is_registered("normal_user"))
        return $normal_user;
    if (session_is_registered("admin_user"))
        return $admin_user;

    return false;
}

function get_unsubscribed_lists($email)
{
    $list = array();

    $query = "select lists.listid, listname,
             email from lists left join sub_lists
             on lists.listid = sub_lists.listid
             and email='$email' where email is NULL order by listname";
    if(db_connect())
    {
        $result = mysql_query($query);
        if (!$result)
            echo "<p>Unable to get list from database. ";
        $num = mysql_numrows($result);
        for ($i = 0; $i < $num; $i++) {
            array_push($list, array(mysql_result($result, $i, 0),
                mysql_result($result, $i, 1)));
        }
    }
    return $list;
}

function load_list_info($listid)
{
    if(!$listid)
        return false;

    if(!db_connect())
        return false;

    $query = "select listname, blurb from lists where listid = $listid";
    $result = mysql_query($query);
    if(!$result)
    {
        echo "Cannot retrieve this list";
        return false;
    }
    $info = mysql_fetch_array($result);
    $query = "select count(*) from sub_lists where listid = $listid";
    $result = mysql_query($query);
    if ($result)
    {
        $infо['subscribers'] = mysql_result($result, 0, 0);
    }
    $query = "select count(*) from mail where listid = $listid
                and status = 'SENT'";
    $result = mysql_query($query);
    if ($result)
    {
        $info['archive'] = mysql_result($result, 0, 0);
    }
    return $info;
}

function get_archive($listid)
{
    //возвращает массив заархивированных сообщений
    //электронной почты для этого списка
    //массив содержит строки типа (идентификатор_строки, тема)
    $list = array();
    $listname = get_list_name($listid);
    $query = "select mailid, subject, listid from mail
                where listid = $listid and status = 'SENT' order by sent";
    if (db_connect())
    {
        $result = mysql_query($query);
        if (!$result)
        {
            echo "<p>Unable to get list from database - $query.";
            return false;
        }
        $num = mysql_numrows($result);
        for ($i = 0; $i < $num; $i++) {
            $row = array(mysql_result($result, $i, 0),
                mysql_result($result, $i, 1), $listname, $listid);
            array_push($list, $row);
        }
    }
    return $list;
}

function subscribe($email, $listid)
{
    if (!$email||!$listid||!list_exists($listid)||!subscriber_exists($email))
        return false;
    //если на этот список рассылки уже имеется подписка,
    //осуществляется выход из функции
    if (subscribed($email, $listid))
        return false;
    if (!db_connect())
        return false;
    $query = "insert into sub_lists values ('$email', $listid)";
    $result = mysql_query($query);
    return $result;
}
function unsubscribe($email, $listid)
{
    if (!$email || !$listid)
        return false;
    if (!db_connect())
        return false;
    $query = "delete from sub_lists where email = '$email' and listid =$listid";
    $result = mysql_query($query);
    return $result;
}

function store_list ($admin_user, $details)
{
    if (!filled_out($details))
    {
        echo "All fields must be filled in. Try again. <br><br>";
        return false;
    }
    else
    {
        if (!check_admin_user($admin_user))
            return false;
        // как эта функция может вызываться кем-либо,
        // не зарегистрированным в качестве администратора?
        if (!db_connect())
        {
            return false;
        }

        $query = "select count(*) from lists where listname = ' $details[name] '";
        $result = mysql_query($query);
        if (mysql_result($result, 0, 0) > 0)
        {
            echo "Sorry, there is already a list with this name.";
            return false;
        }

        $query = "insert into lists values (NULL,
                                           '$details[name]',
                                           '$details[blurb]')";
        $result = mysql_query($query);
        return $result;
    }
}

// создание сообщения на основе хранящихся в базе данных записей и файлов
// отправка тестовых сообщений администратору или реальных сообщений в весь список
// рассылки
function send($mailid, $admin_user)
{
    if (!check_admin_user($admin_user))
        return false;

    if (!($info = load_mail_info($mailid)))
    {
        echo "Cannot load list information for message $mailid";
        return false;
    }
    $subject = $info[0];
    $listid = $info[l];
    $status = $info[2];
    $sent = $info[3];

    $from_name = 'Pyramid MLM';
    $from_address = 'return@address';
    $query = "select email from sub_lists where listid = $listid";
    $result = mysql_query($query);
    if (!$result)
    {
        echo $query;
        return false;
    } else if (mysql_num_rows($result) == 0)
    {
        echo "There is nobody subscribed to list number $listid";
        return false;
    } else
        {
        include('class.html.mime.mail.inc');

        $mail = new html_mime_mail();

        // считывание текстовой версии
        $filename = "archive/$listid/$mailid/text.txt";
        $fp = fopen($filename, "r");
        $text = fread($fp, filesize($filename));
        fclose($fp);

        // считывание HTML-версии
        $filename = "archive/$listid/$mailid/index.html";
        $fp = fopen(Sfilename, "r");
        $html = fread($fp, filesize($filename));
        fclose($fp);

        // получение списка изображений, связанных с этик сообщением
        $query = "select path, mimetype from images where mailid = $mailid";
        if (db_c6nnect()) {
            $result = mysql_query($query);
            if (!$result) {
                echo "<p>Unable to get image list from database.";
                return false;
            }
            $num = mysql_numrows($result);
            for ($i = 0; $i < $num, $i++)
            {
                //загрузка каждого изображения иа диска
                $filename = "archive/$listid/$mailid/" . mysql_result($result, $i, 0);
                $fp = fopen($filename, 'r');
                $image = fread($fp, filesize($filename));
                fclose($fp);
                // добавление изображений к объекту mimemail
                $mail->add_html_image($image,
                    mysql_result($result, $i, 0),
                    mysql_result($result, $i, 1));
            }
        }
        // добавление HTML-кода и текста к объекту mimemail
        $mail->add_html($html, $text);

        // обратите внимание, что в данном случае сообщение создается и кодируется вне
        // цикла, а не повторно внутри него
        $mail->build_message();

        if ($status == 'STORED')
        {
            //отправка HTML-версии сообщения администратору
            $mail->send(get_real_name($admin_user), $admin_user,
                $from_name, $from_address, $subject);
            //отправка текстовой версии сообщения администратору
            mail(get_real_name($admin_user) . " <" . $admin_user . ">", $subject,
                $text, "From: $from_name <$from_address>");
            echo "Mail sent to $admin_user";
            $query = "update mail set status = 'TESTED' where mailid = $mailid";
            if (db_connect())
            {
                $result = mysql_query($query);
            }

            echo "<p>Press send again to send mail to whole list.<center>";
            display_button('send', "&id=$mailid");
            echo "</center>";
        } else if ($status == 'TESTED')

            //отправка в весь список рассылки
            $query = "select subscribers.realname, sub_lists.email,
                                    subscribers.minetype
                          from sub_lists, subscribers
                          where listid = $listid and
                                  sub_lists.email = subscribers.email";
            if (!db_connect())
                return false;

            $result = mysql_query(Squery);
            if (!$result)
                echo "<p>Error getting subscriber list";

            $count = 0;
            // для каждого подписчика
            while ($subscriber = mysql_fetch_row($result))
            {
                if ($subscriber[2] = 'H')
                    //отправка HTML-версии тем пользователям, которые этого желают
                    $mail->send($subscriber[0], $subscriber[l], $from_name,
                        $from_address, $subject);
                else
                    //отправка текстовой версии тек пользователям, которые этого желают
                    mail($subscriber[0] . " <" . $subscriber[l] . ">", $subject,
                        $text, "From: $from_name <$from_address>");
                $count++;
            }
            $query = "update mail set status = 'SENT' , sent = now()
                        where mailid = $mailid";
            if (db_connect())
            {
                $result = mysql_query($query);
            }
            echo "<p>A total of $count messages were sent.";
        }
        else if ($status == 'SENT')
        {
            echo "<p>This mail has already been sent.";
        }
    }
}