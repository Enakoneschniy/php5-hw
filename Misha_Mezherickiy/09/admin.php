<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form method="post">
        <table>

            <tr>
                <td><input type="text" name="news_name" id="news_name"></td>
                <td><label for="news_name">Заголовок новости</label> </td>
            </tr>
            <tr>
                <td><input type="text" name="news_short" id="news_short"></td>
                <td><label for="news_short">Превью новости</label> </td>
            <tr>
                <td><input type="text" name="news_full" id="news_full"></td>
                <td><label for="news_full">Новость</label> </td>
            </tr>
            <tr>
                <td><input type="submit" value="Сохранить" id="submit_news"></td>

            </tr>
        </table>
        </form>
</body>
</html>
<?php



    if($_REQUEST['news_name'] != "" && $_REQUEST['news_full'] != "" && $_REQUEST['news_short'] != "")
        {

            $read_json = file_get_contents('news.json');
            $json = json_decode($read_json);
            $id += sizeof($json,COUNT_RECURSIVE);
            $json["$id"] = array("id" => $id, "name"=> $_REQUEST['news_name'], "short"=> $_REQUEST['news_short'], "full"=> $_REQUEST['news_full']);
            $news = json_encode($json);
            file_put_contents('news.json',$news);
        }

