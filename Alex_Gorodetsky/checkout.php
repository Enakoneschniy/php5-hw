<?
   // подключение набора функций
   include ('book_sc_fns.php');

   // запуск сеанса
   session_start();

   do_html_header("Checkout");

   if($cart&&array_count_values($cart))
   {
       display_cart($cart, false, 0);
       display_checkout_form($HTTP_POST_VARS);
   }
   else
       echo "<p>There are no items in your cart";

   display_button("show_cart.php", "continue-shopping", "Continue Shopping");

   do_html_footer();
?>