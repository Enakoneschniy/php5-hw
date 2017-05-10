<?
  require_once ("bookmark_fns.php");
  session_start();
  do_html_header("Changing password");
  check_valid_user();
  if (!filled_out($HHTP_POST_VARS))
  {
      echo "You have not filled out the form completely.
             please try again.";
      display_user_menu();
      do_html_footer();
      exit;
  }
  else
  {
        if ($new_passwd!=$new_passwd2)
            echo "Passwords entered were not the same. Not changed.";
        else if (strlen($new_passwd)>16 || strlen($new_passwd)<6)
            echo "New password must be between 6 and 16 characters. Try again.";
        else
        {
            // попытка обновления
            if (change_password($valid-user, $old_passwd, $new_passwd))
                echo "Password changed.";
            else
                echo "Password could not be changed.";
        }
  }
     display_user_menu();
     do_html_footer();
?>