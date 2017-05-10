<html>
<head>
  <title>Bob's Auto Parts - Customer Orders</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Customer Orders</h2>
<?
   //Считывание всего файла
  //Каждый заказ становится элементом массива
  $orders= file("../../orders/orders.txt");
  //подсчет количества заказов в массиве
  $number_of_orders = count($orders);
  if ($number_of_orders == 0)
  {
    echo "<p><strong>No orders pending.
         Please try again later.</strong></p>";
  }
  echo "<table border=1>\n";
  echo "<tr><th bgcolor = V"#CCCCFF\">Order Date</td>
              <th bgcolor = V"#CCCCFF\">Tires</td>
              <th bgcolor = V"#CCCCFF\">Oil</td>
              <th bgcolor = V"#CCCCFF\">Spark Plugs</td>
              <th bgcolor = V"#CCCCFF\">Total</td>
              <th bgcolor = V"#CCCCFF\">Address</td>
         <tr>";
  for ($i=0; $i<$number_of_orders; $i++)
  {
      //разбиение каждой строки
      $line = explode( "\t", $orders[$i] );
      //сохранение только количества заказанных товаров
      $line[1] = intval( $line[1] );
      $line[2] = intval( $line[2] );
      $line[3] = intval( $line[3] );
      //вывод каждого заказа
      echo "<tr><td>$line[0]</td>
                  <td align = right>$line[1]</td>
                  <td align = right>$line[2]</td>
                  <td align = right>$line[3]</td>
                  <td align = right>$line[4]</td>
                  <td>$line[5]</td>
             </tr>";
  }
  echo "</table>";
?>
</body>
</html>