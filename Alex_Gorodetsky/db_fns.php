function db_connect()
{
    $result = mysql_pconnect("localhost", "bm_user", "password");
    if (!$result)
        return false;
    if (!mysql_select_db("bookmarks"))
        return false;

    return $result;
}

function db_result_to_array($result)
{
    $res_array = array();

    for ($count=0; $row = @mysql_fetch_array($result); $count++)
        $res_array[$count] = $row;

    return $res_array;
}