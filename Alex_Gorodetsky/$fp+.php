$name = "file.txt";
$mode ="r";
$result = include("openfile.php");
if( $result == 1 )
{
  // выполнение необходимых действий с файлом
  // обращение к переменной $fp, созданной во включенном файле
}