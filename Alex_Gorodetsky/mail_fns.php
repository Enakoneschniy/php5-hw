function get_accounts($auth_user)
{
    $list = array();
    if(db_connect())
    {
        $query = "select * from accounts where username = '$auth_user'";
        $result = mysql_query($query);
                if($result)
        {
            while($settings = mysql_fetch_array($result))
                array_push($list, $settings);
        }
        else
            $result false;
    }
    return $list;
}

function store account_settings($auth_user, $settings)
{
    if (!filled_out($settings))
    {
        echo "All fields must be filled in. Try again. <br><br>";
        return false ;
    }
    else
    {
        if ($settings['account']>0)
           $query = "update accounts set server = '$settings[server]',
                        port = $settings [port], type = '$settings[type]',
                        remoteuser = '$settings[remoteuser]',
                        remotepassword = ' $settings[remotepassword]'
                        where accountid — $settings[account]
                        and username = ' $auth_user '";
        else
           $query - "insert into accounts values ( ' $auth_user ',
                               '$settings[server]' , $settings [port],
                               '$ settings[type]' , '$settings[remoteuser]',
                               '$ settings[remotepassword]', NULL)";
        if(db connect() && mysql_query($query))
        {
           return true;
        }
        else
        {
        echo "could not store changes . <br><br><br><br><br><br>";
            return false;
        }
    }
}

function delete_account($auth_user, $accountid)
{
    // удаление из базы данных одной из учетных записей
    // текущего пользователя

    $query = "delete from accounts where
                      accountid='$accountid' and
                      username= '$auth_user'";
    if(db_connect())
    {
        $result = mysql_query($query);
    }
    return $result;
}

function number_of_accounts($auth_user)
{
    // определение количества учетных записей,
    // принадлежащих пользователю

    $query = "select count(*) from accounts where username =
    '$auth_user'";

    if(db_connect())
    {
        $result = mysql_query($query);
            if($result)
                return mysql_result($result, 0, 0);
    }
    return 0;
}

function retrieve_message($auth_user, $accountid, $messageid, $fullheaders)
{
    $message = array();

    if (!($auth_user && $messageid && $accountid))
        return false;

    $imap = open_mailbox($auth_user, $accountid);
    if(!$imap)
        return false;

    $header = imap_header($imap, $messageid);

    if(!$header)
        return false;

    $message['body'] = imap_body($imap, $messageid);
    if(!$message['body'])
        $message['body'] = '[This message has no body]\n\n\n\n\n\n';
    if($fullheaders)
        $message['fullheaders'] = imap_fetchheader($imap, $messageid);
    else
        $message['fullheaders'] = ' ';

    $message['subject'] = $header->subject;
    $message['fromaddress'] - $header->fromaddress;
    $message['toaddress'] = $header->toaddress;
    $message['ccaddress'] = $header->ccaddress;
    $message['date'] = $header->date;

    // обратите внимание на возможность получения более
    // подробной информации с помощью полей from и to
    // вместо fromaddress и toaddress, но так проще

    imap_close($imap);
    return $message;
}

function delete_message($auth_user, $accountid, $message_id)
{
    // удаление одного сообщения из сервера

    $imap = open_mailbox($auth_user, $accountid);
    if ($imap)
    {
        imap_delete ($imap, $message_id);
        imap_expunge($imap);
        imap_close ($imap);
        return true ;
    }
    return false;
}

function send_message($to, $cc, $subject, $message)
{
    // отправка одного сообщения средствами РНР
    global $auth_user;
    if (!db_connect())
    {
        return false;
    }
    $query = "select address from users where username='$auth_user'";
    $result = mysql_query($query);
    if (!$result)
    {
        return false;
    }
    else if (mysql_num_rows($result) == 0)
    {
        return false;
    }
    else
    {
        $other = "From: " . mysql_result($result, 0, "address") . "\r\ncc: $cc";
        if (mail($to, $subject, $message, $other))
            return true;
        else
        {
            return false;
        }
    }
}