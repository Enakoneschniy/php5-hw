<HTML>
<HEAD>
<TITLE>Alphabetizing Example</TITLE>
</HEAD>
<BODY>
<?php
/* ��� �������� �������� � ������������ ������, ��������
�� "list.html".*/
$Array = explode (" ", $List);
sort ($Array);
$NewList = implode ("<BR>", $Array);
print ("An alphabetized version of your list is:<BR>$NewList");
?>
</BODY>
</HTML>