<HTML>
<HEAD>
<TITLE>Alphabetizing Example</TITLE>
</HEAD>
<BODY>
<?php
/* Эта страница получает и обрабатывает данные, принятые
от "list.html".*/
$Array = explode (" ", $List);
sort ($Array);
$NewList = implode ("<BR>", $Array);
print ("An alphabetized version of your list is:<BR>$NewList");
?>
</BODY>
</HTML>