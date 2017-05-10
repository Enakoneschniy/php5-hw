if    (!eregi("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$",
   $email))
{
   echo "That is not a valid email address. Please return to the"
          ." previous page and try again.";
  exit;
}
$toaddress = "feedback@bobsdomain.com"; //значение по умолчанию
if (eregi("shop|customer service|retail", $feedback))
   $toaddress = "retail@bobsdomain.com";
else if (eregi("deliver.*|fulfil.*", $feedback))
   $toaddress = "fulfilment@bobsdomain.com";
else if (eregi("bill|account", $feedback))
   $toaddress = "accounts@bobsdomain.com";

if (eregi("bigcustomer\.com", $email))
   $toaddress = "bob@bobsdomain.com";