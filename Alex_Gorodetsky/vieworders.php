<html>
<head>
  <title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?

  @  $fp=fopen("$DOCUMENT_ROOT/../orders/orders.txt", "r");
     flock($fp, 1); // блокирование файла для чтения
     // считывание из файла
     flock($fp, 3); // снятие блокировки записи
     fclose($fp);

    if (!$fp)
     {
       echo "<p><strong>No orders pending."
            ."Please try again later.</strong></p></body></html>";
       exit;
     }

     while (!feof($fp))
     {
        $order=fgets($fp, 100);
        echo $order."<br>";
     }

     fclose($fp);
?>
</body>
</html>