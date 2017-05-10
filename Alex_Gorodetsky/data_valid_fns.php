function filled_out($form-vars)
{
    //проверить, что каждая переменная имеет значение
    foreach ($form_vars as $key => $value)
    {
        if (!isset($key) || ($value == ""))
            return false;
    }
    return true;
}

function valid_email ($address)
{
    // проверка допустимости адреса электронной почты
    if (ereg("^[a-zA-Z0-9_]+@[a-zA-Z-0-9\-]=\.{a-zA-Z0-9\-\.}+$", $address))
        return true;
    else
        return false;
}