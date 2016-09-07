<?php


function generate_statistics($text)
{
    $rows = preg_split('/\n/', $text);
    $coincidence_words = find_coincidence_words(array_unique(preg_split('/[\s,\n]+/', $text)), $text);

    $resul_1_part = '<br>Совпадения: 1 слово:';
    $resul_2_part = count($coincidence_words) . ' слова: ';

    for($i = 0; $i<count($coincidence_words); $i++){
        $resul_1_part .= " $coincidence_words[$i] (".find_reapeat_words_count($text, $coincidence_words[$i])." совпадения)";
        $resul_2_part .= "$coincidence_words[$i] ";
    }
    $resul_2_part .= "(". find_count_rows($rows, $coincidence_words) ." совпадения)";
    return $resul_1_part . "<br>". $resul_2_part;

}


function find_reapeat_words_count($text, $word){
    return substr_count($text, $word);
}


function find_count_rows($rows, $coincidence_words){
    $res = 0;
    for($i = 0; $i < count($rows); $i++){
        $count_words = 0;
        for($j = 0; $j < count($coincidence_words); $j++){
            if(substr_count($rows[$i], $coincidence_words[$j])){
                $count_words++;
            }
        }
        if($count_words == count($coincidence_words)){
            $res +=1;
        }
    }
    return $res;
}


function find_coincidence_words($ar_collocation, $sting)
{
    $res = [];
    for ($i = 0; $i < count($ar_collocation); $i++) {
        $temp = substr_count($sting, $ar_collocation[$i]);
        if($temp > 1){
            $res[] = "$ar_collocation[$i]";
        }
    }
    return $res;
}
