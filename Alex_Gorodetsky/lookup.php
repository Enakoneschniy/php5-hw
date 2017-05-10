<html>
<head>
    <title>Stock Quote from NASDAQ</title>
</head>
<body>
<?
   // выбор сайта с биржевой информацией
   $symbol="AMZN";
   echo "<h1>Stock Quote for $symbol</h1>";

   // соединиться с указанным URL и прочесть информацию
   $theurl = "http://quotes.nasdaq-amex.com/Quote.dll?"
                ."page=multi&mode=Stock&symbol=".$symbol;
   if  (!($fp = fopen($theurl, "r")))
   {
       echo "Could not open URL";
       exit;
   }
   $contents = fread($fp, 1000000);
   fclose($fp);

   //найти часть страницы, которую следует отобразить
   $pattern = "(\\\$[0-9 ]+\\. [0-9]+)";
   if (eregi($pattern, $contents, $quote))
   {
       echo "$symbol was last sold at:  ";
       echo $quote[1];
   }   else
   {
       echo "No quote available";
   };

   // указать источник информации
   echo "<br>"
           ."This information retrieved from <br>"
           ."<a href=\"$theurl\">$theurl</a><br>"
           ."on ".(date("l js F Y g:1 a T"));
?>
</body>
</html>