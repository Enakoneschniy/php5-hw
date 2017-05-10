<?
 require_once ("bookmark_fns.php");
 session_start();
 do_html_header ("Deletingbookmarks");
 check_valid_user();
 if (!filled_out($HTTP_POST_VARS))
 {
     echo "You have not chosen any bookmarks to delete.
            Please try again.";
     display_user_menu ( );
     do_html_footer ( );
     exit;
 }
 else
 {
     if (count($del_me) >0)
     {
         foreach ($del_me as $url)
         {
             if (delete_bm($valid user, $url))
                 echo "Deleted " .htmlspecialchars($url).".<br>";
         }
     }
     else
         echo "No bookmarks selected for deletion";
 }

 // отображение закладок, сохраненных данным пользователем
 if ($url_array = get_user_urls($valid_user));
    display_user_urls($url_array);

 display_user_menu( );
 do_html_footer();
?>