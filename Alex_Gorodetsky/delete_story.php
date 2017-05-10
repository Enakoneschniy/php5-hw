<?
// delete_story.php
include ("include_fns.php");
$conn = db_connect();
$now = time();
$sql = "delete from stories where id = $story";
$result = mysql_query($sql, $conn);
header("Location: $HTTP_REFERER");
?>