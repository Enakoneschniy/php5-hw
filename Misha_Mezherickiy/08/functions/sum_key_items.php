<?php

function sum_key_items($array,$functions)
    {
        $sum = 0;
        foreach ($array as $item)
        {
            $sum += $functions($item);
        }
        return $sum;
    }
