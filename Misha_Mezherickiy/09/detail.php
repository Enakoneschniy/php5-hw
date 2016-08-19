<?php

    include_once "function/m_array_from_json.php";

    $read_json = file_get_contents('news.json');
    $news_wall = json_decode($read_json);

    $new_ar = read_m_array($news_wall);

