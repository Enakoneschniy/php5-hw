<html>
<head>
    <title>Mirror update</title>
</head>
<body>
<h1>Mirror update</h1>
<?
// установка переменных — можно изменить для своих целей
$host = "ftp.cs.rmit.edu.au";
$user = "anonymous";
$password = "laura@tangledweb.com.au";
$remotefile = "/pub/tsg/ttsshl4 . zip";
$localfile = "$DOCUMENT_ROOT/ . . /writable/ttssh!4 . zip";
// установка соединения с хостом
$conn = ftp_connect("$host");
if (! $conn)
{
    echo "Error: Could not connect to ftp server<br>";
    exit;
}
echo "Connected to $host.<br>" ;
// регистрация на хосте
@ $result = ftp_login($conn, $user, $pass);
if (!$result)
{
    echo "Error: Could not log on as $user<br>";
    ftp_quit($conn);
    exit;
}
echo "Logged in as $user<br>";
// проверка времени файла — следует ли его обновлять
echo "Checking file time...<br>";
if (file_exists($localfile))
{
    $localtime = filemtime($localfile);
    echo "Local file last updated ";
    echo date("G:i j-M-Y", $localtime);
    echo "<br>";
}
else
    $localtime=0;
$remotetime = ftp_mdtm($conn, $remotefile);
if (!($remotetime >= 0))
{
    // Это не значит, что файла там нет, сервер может просто не
    // поддерживать "время модификации"
    echo "Can't access remote file time .<br>";
    $remotetime=$localtime+1;  // проверка обновления
}
else
{
    echo "Remote file last updated ";
    echo date("G:i j-M-Y", $remotetime) ;
    echo "<br>";
}
if (!($remotetime > $localtime))
{
    echo "Local copy is up to date.<br>";
    exit;
}
// загрузка файла
echo "Getting file from server...<br>";
$fp = fopen ($localfile, "w") ;
if (!$success = ftp_fget($conn, $fp, $remotefile, FTP_BINARY))
{
    echo "Error: Could not download file";
    ftp_quit($conn);
    exit;
}
fclose($fp);
echo "File downloaded successfully";
// отсоединение от хоста
ftp_quit($conn);
?>
</body>
</html>