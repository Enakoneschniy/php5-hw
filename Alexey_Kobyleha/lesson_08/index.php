<?php

require_once 'array.php'; // include array so as not to contaminate the code

function arrSum(...$arrayArg)
{

    // last argument as anonymous function
    $function = array_pop($arrayArg);

    // errors
    if (count($arrayArg) < 1) {
        return $result = 'It should be at least 2 arguments';
    }

    if (!is_callable($function)) {
        return $result = 'Last argument must be callable';
    }

    // sum of arrays
    if (count($arrayArg) > 1 && is_callable($function)) {
        $result = 0;
        for ($i = 0; $i < count($arrayArg); $i++) {
            foreach ($arrayArg[$i] as $item) {
                $result += $function($item);
            }
        }
        return $result;
    }

    return $result = 0;
}

$result = arrSum($arrPhones, $arrNotebooks, $arrTv, function ($item) {
    return $item['price'];
});

echo $result;