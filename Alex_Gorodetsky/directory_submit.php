<html>
<head>
    <title>Site submission results</title>
</head>
<body>
<h1>Site submission results</h1>
<?
   // Проверить URL
   $url = parse_url($url) ;
   $host = $url[host];
   if(!($ip = gethostbyname($host)))
   {
       echo "Host for URL does not have valid IP" ;
       exit;
   }
   echo "Host is at IP $ip <br>" ;
   // Проверить почтовый адрес
   $email = explode("@", $email) ;
   $emailhost = $email[l];
   if (!getmxrr($emailhost, $mxhostsarr))
   {
       echo "Email address is not at valid host";
       exit;
   }
   echo "Email is delivered via: ";
   foreach ($mxhostsarr as $mx)
     echo "$mx ";
   // Если сценарий дошел до этой точки, значит все в порядке
   echo "<br>All submitted details are ok.<br>";
   echo "Thank you for submitting your site.<br>"
         ."It will be visited by one of our staff members soon."
   // В реальном случав добавить в базу данных ожидающих сайтов...
?>
</body>
</html>