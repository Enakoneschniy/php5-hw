class classname
{
   var $attribute;
   function get_attribute()
   {
      return $this->attribute;
   }
   function set_attribute($new_value)
   {
     if( $new_value >= 0 && $new_value <= 100 )
      $this->attribute = $new_value;
   }
}