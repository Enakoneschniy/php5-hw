<?
   include('book_sc_fns.php');
   // Для покупательской тележки требуется запуск сеанса
   session_start();
   do_html_header("Welcome to Book-O-Rama");

   echo "<p>Please choose a category:</p>";

   // Извлечение категорий из базы данных
   $cat_array = get_categories();

   // отображение ссылок на страницы категорий
   display_categories($cat_array);

   // Если пользователь вошел в систему с правами
   // администратора, отобразить ссылки на добавление,
   // удаление и редактирование категорий
   if (session_is_registered("adminuser"))
   {
       display_button("admin.php", "admin-menu", "Admin Menu");
   }
   do_html_footer();
?>

case 'delete':
{
    delete_message($auth_user, $selected_account, $messageid);
    // оператор 'break' опущен умышленно - будет выполнен
    // переход к следующему оператору case
}
case 'select-account':
case 'view-mailbox':
{
    // если почтовый ящик только что открыт либо находится
    // в режиме просмотра, отобразить его содержимое
    display_list($auth_user, $selected_account);
    break;
}

case 'reply-all' :
{
    //установка прежнего значения поля адреса отправки копии
    if(!$imap)
        $imap = open_mailbox($auth_user, $selected_account);
    if($imap)
    {
        $header = imap header($imap, $messageid);
        if($header->reply_toaddress)
            $to => $header->reply_toaddress ;
        else
            $to e $header->fromaddress;
        $cc = $header->ccaddress;
        $subject = 'Re: '.$header->subject;
        $body = add_quoting(stripslashes(imap_body($imap, $messageid)));
        imap_close($imap);
        display new_message_£orm($auth_user, $to, $cc, $subject, $body);
    }
    break;
}
case 'reply' :
{
    //установка в поле То адреса из поля Reply-to либо From
    if(!$imap)
        $imap = open mailbox($auth_user, $selected account);
    if($imap)
    {
        $header = imap_header($imap, $messageid);
        if($header->reply_toaddress)
            $to = $header->reply_toaddress;
        else
            $to = $header->fromaddress;
        $subject = 'Re: '.$header->subject;
        $body = add_guoting(stripslashes(imap_body($imap, $messageid)));
        imap_close($imap);
        display_new_message_form($auth user, $to, $cc, $subject, $body);
    }
    break; //оператор 'break' опущен умышленно
}
case 'forward' :
{
    //помещение прежнего сообщения, выделенного кавычками, в текущее сообщение
    if(!$imap)
        $imap = open_mailbox($auth_user, $selected_account);
    if($imap)
    {
        $header = imap_header($imap, $messageid);
        $body = add_quoting(stripslashes(imap_body($imap, $messageid)));
        $subject = 'Fwd: '.$header->subject;
        imap_close($imap);
        display_new_message_form($auth_user, $to, $cc, $subject, $body);
    }
    break;
}