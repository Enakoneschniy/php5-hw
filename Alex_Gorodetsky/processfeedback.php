<?
    $toaddress = "feedback@bobsdomain.com"; //значение по умолчанию
    // Изменение переменной $toaddress при соответствии критериям
    if (strstr($feedback, "shop"))
      $toaddress = "retail@bobsdomain.com";
    else if (strstr($feedback, "delivery"))
      $toaddress = "fulfilment@bobsdomain.com";
    else if (strstr($feedback, "bill"))
      $toaddress = "accounts@bobsdomain.com";
    $subject = "Feedback from web site";
    $maincontent = Customer name: ".$name."\n"
                         ."Customer email:  ".$email."\n";
                         ."Customer comments:  \n".$feedback."\n";
    $fromaddress = "webserver@bobsdomain.com";

    mail($toaddress, $subject, $maincontent, $fromaddress);
?>
<html>
<head>
    <title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
<h1>Feedback sumitted>/h1>
<p>Your feedback has been sent.</p>
</body>
</html>