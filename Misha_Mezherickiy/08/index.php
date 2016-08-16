<?php

include_once "functions/sum_key_items.php";

$arr_medals = [
    [
        'Country' => 'Ukraine',
        'gold'    => 0,
        'silver'  => 4,
        'bronze'  => 1
    ],[
        'Country' => 'USA',
        'gold'    => 27,
        'silver'  => 24,
        'bronze'  => 26
    ],[
        'Country' => 'UK',
        'gold'    => 16,
        'silver'  => 17,
        'bronze'  => 8
    ],[
        'Country' => 'China',
        'gold'    => 15,
        'silver'  => 14,
        'bronze'  => 18
    ],[
        'Country' => 'Russia',
        'gold'    => 11,
        'silver'  => 12,
        'bronze'  => 13
    ]

];
echo "<pre>";
print_r ($arr_medals);
echo "</pre>";

$result = sum_key_items($arr_medals,function ($item)
{
    return $item['gold'];
});;

echo $result;