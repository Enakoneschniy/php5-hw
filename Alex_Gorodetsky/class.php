class classname
{
   function classname ($param)
   {
      echo "Constructor called with parameter $param <br>";
   }
}
$a = new classname("First");
$b = new classname("Second");
$c = new classname();