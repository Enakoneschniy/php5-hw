function get_category name($catid)
{
    // запрос в базе данных имени категории для данного идентификатора
    $conn = db_connect();
    $query = "select catname
                from categories
                where catid = $catid";
    $result = @mysql_query($query);
    if (!$result)
        return false;
    $num_cats = @mysql_num_rows($result);
    if ($num_cats = 0)
        return false;
    $result = mysql_result($result, 0, "catname"),-
    return $result;
}

function calculate_price($cart)
{
    //вычисление общей стоимости всех элементов тележки
    $price = 0.0;
    if(is_array($cart))
    {
        $conn = db_connect();
        foreach ($cart as $isbn => $qty)
        {
            $query= "select price from books where isbn= ' $isbn ' ";
            $result = mysql_query($query);
            if ($result)
            {
                $item_price = mysql_result($result, 0, "price");
                $price +=$item_price*$qty;
            }
        }
    }
    return $price;
}

function calculate_items($cart)
{
    // подсчет общего количества элементов в тележке
    $items = 0;
    if(is_array($cart))
    {
        foreach ($cart as $isbn => $qty)
        {
            $items += $qty;
        }
    }
    return $items;
}