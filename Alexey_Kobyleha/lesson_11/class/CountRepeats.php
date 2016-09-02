<?php

class CountRepeats
{
    const FILE = 'db/string.inc';

    public function getStings($array = true)
    {
        $stringArr = file(self::FILE);

        if ($array !== true) {
            $stringArr = file_get_contents(self::FILE);
        }
        return $stringArr;
    }

    public function setStrings($text)
    {
        $result = file_put_contents(self::FILE, $text);
        if (!empty($result)) {
            $result = "Text saved";
        }

        return $result;
    }

    public function countAllRepeats()
    {
        $dataArr = $this->getStings();

        foreach ($dataArr as $value) {
            // Clean and split into words
            $value = preg_replace('~[^\d\w ]+~u', '', mb_strtolower($value));
            $value = explode(' ', $value);

            // Search and count duplicates
            foreach ($value as $k => $v) {
                if (isset($dataArr[$v])) {
                    $dataArr[$v]++;
                } else {
                    $dataArr[$v] = 1;
                }
            }
        }

        // Remove unnecessary items
        foreach ($dataArr as $key => $value) {
            if ($value === 1 || is_int($key)) {
                unset($dataArr[$key]);
            }
        }

        return $dataArr;
    }

    public function countStringRepeats()
    {

        $stringArr = $this->getStings();
        $repeatsArr = $this->countAllRepeats();

        // implementation result Array
        $resultArr = [];

        // Search in string all matches
        foreach ($stringArr as $key => $string) {
            foreach ($repeatsArr as $word => $count) {
                if (strpos(mb_strtolower($string), $word) === false) {  // V. 2: if (preg_match_all('~$word~', $string)) {echo true;}
                    $resultArr[$key] = [$string => false];
                    break;
                } else {
                    $resultArr[$key] = [$string => true];
                }
            }
        }

        // add last array item for easy viewing info
        $resultArr['match'] = $repeatsArr;
        $resultArr['count'] = 0;

        foreach ($resultArr as $item) {
            if (is_array($item)) {
                foreach ($item as $value) {
                    if ($value === true) {
                        $resultArr['count']++;
                    }
                }
            }
        }

        /*
        Return $resultArr['$n'] == string (TRUE || FALSE for all matches in string)
        Return $resultArr['math'] == Repeated words
        Return $resultArr['count'] == count string with all matches
        */

        return $resultArr;
    }
}