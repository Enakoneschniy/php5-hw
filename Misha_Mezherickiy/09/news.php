<?php

    include_once "function/m_array_from_json.php";

    $read_json = file_get_contents('news.json');
    $news_wall = json_decode($read_json);

    $new_ar = read_m_array($news_wall);

        foreach ($new_ar as $key => $value)
        {
            foreach ($value as $new_key => $new_value)
            if($new_key == 'name')
            {
                ?>
                <p>
                    <a href="detail.php">
                    <?= $new_value?>
                    </a>
                </p>

            <?}
            elseif($new_key == 'short')
            {?>
                <p>
                    <?= $new_value ?>
                </p>
            <?}
        }
