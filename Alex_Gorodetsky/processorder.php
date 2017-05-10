<html>
<head>
  <title>Bob's Auto Parts - Order Results</title>
</head>
<body>
<h1>Bob's Auto Parts</h1>
<h2>Order Results</h2>
<?
echo "<p>Order processed at ";
echo date("H:i, jS F");
echo "<br>";
?>
</p></body>
</html>
echo "<p>Your order is as follows:";
echo "<br>";
echo "$tireqty tires<br>";
echo $oilqty." bottles of oil<br>";
echo $sparkqty." spark plugs<br>";
$totalqty=0;
$totalamount=$totalqty;
define("TIREPRICE", 100);
define("OILPRICE", 10);
define("SPARKPRICE", 4);
	echo 	TIREPRICE;
$totalqty=$tireqty+$oilqty+$sparkqty;
$totalamount=$tireqty*TIREPRICE+$oilqty*OILPRICE
             +$sparkqty*SPARKPRICE;
$totalamount=number_format($totalamount,2);
echo "<br>\n";
echo "Items ordered:          ".$totalqty."<br>\n";
echo "Subtotal:                $".$totalamount."<br>\n";
$taxrate=0.10; // местный налог с продаж составляет 10%
$totalamount=$totalamount*(1+$taxrate);
$totalamount=number_format($totalamount,2);
echo "Total including tax: $".$totalamount."<br>\n";
echo isset($tireqty);
echo isset($nothere);
echo empty($tireqty);
echo empty($nothere);
if( $totalqty==0 )
{
   echo "You did not order anything on previous page!<br>";
}
else
{
   if ( $tireqty>0 )
      echo $tireqty."tires<br>";
   if ( $oilqty>0 )
      echo $oilqty."bottles of oil<br>";
   if ( $sparkqty>0 )
      echo $sparkqty."spark plugs<br>";
}
   if ( $tireqty < 10 )
   $discount = 0;
   elseif ( $tireqty> = 10 &$ $tireqty<=49 )
   $discount = 5;
   elseif ( $tireqty >= 50 &$ $tireqty<=99 )
   $discount = 10;
   elseif ( $tireqty > 100 )
   $discount = 15;