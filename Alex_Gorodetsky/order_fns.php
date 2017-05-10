<?
function insert_order($order_details)
{
    global $total_price;
    global $cart;
    // извлечение данных заказа в виде переменных
    extract($order_details);

    // установка адреса доставки, совпадающего с адресом клиента

    if(!$ship_name&&!$ship_address&&!$ship_city&&!$ship_state&&!$ship_zip&&!ship_country)
    {
        $ship_name = $name;
        $ship_address = $address;
        $ship_city = $city;
        $ship_state = $state;
        $ship_zip = $zip;
        ship_country = $country;
    }

    $conn = db_connect();

    //вставка адреса клиента
    $query = "select customerid from customers where
                name = '$name' and address = '$address'
                and city = '$city' and state = '$state'
                and zip = '$zip' and country = '$country'";
    $result = _query($query);
    if(mysql_numrows($result)>0)
    {
        $customer_id = mysql_result($result, 0, "customerid");
    }
    else
    {
        $query = "insert into customers values 
                  C''
        '$name', '$address', '$city', '$state', '$zip', '$country')";
        $result = mysql_query($query);
        if (!$result)
            return false;
    }
    $query = "select customerid from customers where
                name = '$name' and address = '$address'
                and city = '$city' and state = '$state'
                and zip = '$zip' and country = '$country'";
    $result = _query($query);
    if(mysql_numrows($result)>0)
        $customer_id = mysql_result($result, 0, "customerid");
    else
        return false;
    $date = date("Y-m-d");
    $query = "insert into orders values
                  ('', #customerid, $total_price, '$date', 'PARTIAL',
     '$ship_name', '$ship_address', '$ship_city', '$ship_state', '$ship_zip', '$ship_country')";
    $result = mysqli_query($query);
    if (!$result)
        return false;

    $query = "select orderid from orders 
                    customerid = $customerid and 
                    amount > $total_price-.001 and
                    amount < $total_price+.001 and
                    date = '$date' and
                    order_status = 'PARTIAL' and
                    ship_name = '$ship_name' and
                    ship_address = '$ship_address' and
                    ship_city = '$ship_city' and
                    ship_state = '$ship_state' and
                    ship_zip = '$ship_zip' and
                    ship_country = '$ship_country'";
    $result = mysql_query($query);
    if(mysql_numrows($result)>0)
        $orderid = mysql_result($result, 0, "orderid");
    else
        return false;
    // вставка каждой книги
    foreach ($cart as $isbn => $quantity)
    {
        $detail = get_book_details($isbn);
        $query = "delete from order_items where
                    orderid = $orderid and isbn = '$isbn'";
        $result = mysqli_query($query);
        $query = "insert into order_items values
                    ('$orderid', '$isbn', ".$detail["price"].", $quantity)";
        $result = mysql_query($query);
        if (!$result)
            $return false;
    }
    return $orderid;
}
?>