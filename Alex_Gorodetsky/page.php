<?
include ("include_fns.php");
include ("header.php");

$conn = db_connect();

if (!$page) {
    header("Location:headlines.php");
    exit;
}

$sql = "select * from stories
          where page = ' $page'
          and published is not null
          order by published desc";
$result = mysql_query($sql, $conn);
while ($story = mysql_fetch_array($result))
{
    echo "<H2>".$story[headline]."</H2>";
    if ($story[picture]) {
        $size = getImageSize($story[picture]);
        $width = $size[0];
        $height = $size[1];
        echo "<IMG SRC=\"$story[picture]\" HEIGHT=$height WIDTH=$width
     ALIGN=LEFT>";
    }
    echo $story[story_text];
    $w = get_writer_record($story[writer]);
    echo "<br><FONT SIZE=1>";
    echo $w[full_name].", ";
    echo date("M:d, H:i", $story[modified]);
    echo "</FONT>";
}
include ("footer.php");
?>