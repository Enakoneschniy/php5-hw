$array = array( "key1" => "value1", "key2" => "value2", "key3" => "value3");
extract($array);
echo "$key1 $key2 $key3";

$array = array( "key1" => "value1", "key2" => "value2", "key3" => "value3");
extract($array, EXTR_PREFIX_ALL, "myPrefix");
echo "$myPrefix_key1 $myPrefix_key2 $myPrefix_key3";