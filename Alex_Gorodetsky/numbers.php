<?php
function CalculateTotal ($HowMany, $Price, $TaxRate, $Savings) {
  $TaxRate++; // $TaxRate is now worth 1.06.
  $TheCost = ($Price * $HowMany);
  if ( ($TheCost < 50) AND ($Savings) ) {
    print ("Your \$$Savings will not apply because the total value
    of the sale is under $50!\n<P>");
  }
  if ($TheCost >= 50) {
    $TheCost = $TheCost - $Savings;
  }
  $TheCost = $TheCost * $TaxRate;
  return $TheCost;
} // Конец функции CalculatePayments.
?>
<HTML>
<HEAD>
<TITLE>Calculation Functions</TITLE>
</HEAD>
<BODY>
<?php
$Cost = 20.00;
$Tax = 0.06;
if ($Quantity) {
    $Quantity = abs($Quantity);
    $Discount = abs($Discount);
    $TotalCost = ($Cost * $Quantity);
    if (($TotalCost < 50) AND ($Discount)) {
       print ("Your \$$Discount will not apply because the total value
       of the sale is under $50!\n<P>");
    }
      if ($TotalCost >= 50) {
          $TotalCost = $TotalCost - $Discount;
      }
    $TotalCost = $TotalCost * $Tax;
    $Payments = round ($TotalCost, 2) / 12;
    // Печать результатов.
    print ("You requested to purchase $Quantity widget(s) at \$$Cost each.\n<P>");
    print ("The total with tax, minus your \$$Discount, comes to $");
    printf ("%01.2f", $TotalCost);
    print (" \n<P>You may purchase the widget(s) in 12 monthly
    installments of $");
    print (CalculatePayments($TotalCost, "12"));
    print (" each.\n<P>");
} else {
    print ("Please make sure that you have entered both a quantity and 
    an applicable discount and then resubmit.\n");
}
?>
</BODY>
</HTML>