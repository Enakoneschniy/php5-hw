<?php

    function read_m_array($array)
    {
        $id = 0;
        $i = 0;
        foreach ($array as $key => $value)
        {
            $read = $value;
            foreach ($read as $value)
            {

                if($i % 4 == 0)
                {
                    $new_ar[$id]['id'] = $value;
                    $i++;
                }
                elseif($i % 4 == 1)
                {
                    $new_ar[$id]['name'] = $value;
                    $i++;
                }
                elseif($i % 4 == 2)
                {
                    $new_ar[$id]['short'] = $value;
                    $i++;
                }
                else
                {
                    $new_ar[$id]['full'] = $value;
                    $id++;
                    $i = 0;
                }
            }
        }
        return $new_ar;
    }