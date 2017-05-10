function myMultiply(&$value, $key, $factor)
{
  $value *= $factor;
}
array_walk(&$array, "myMultiply", 3);