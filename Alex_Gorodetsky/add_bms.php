<?
  require_once("bookmark_fns.php");
  session_start();
  do_html_header("Adding bookmarks");
  check_valid_user();
  if (!filled_out($HTTP_POST_VARS))
  {
      echo "You have not filled out the form completely.
             Please try again.";
      display_user_menu();
      do_html_footer();
      exit;
  }
  else
  {
      // проверка формата URL-адреса
      if (strstr($new_url, "http://")===false)
          $new_url = "http://".$new_url;

      // проверка допустимости URL-адреса
      if (@fopen($new_url, "r"))
      {
          // попытка добавления закладки
          if (add_bm($new_url))
              echo "Bookmark added.";
          else
              echo "Could not add bookmark.";
      }
      else
          echo "Not a valid URL.";
  }
      // отображение закладок, сщхраненных данным пользователем
     if ($url_array = get_user_urls($valid_user));
        display_user_urls($url_array);

        display_user_menu();
        do_html_footer();
?>