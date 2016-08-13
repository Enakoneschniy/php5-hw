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
        <p>
            <label for="size">Array size</label>
            <input type="text" name="size" id="size" value="<?=isset($_REQUEST['size']) ? $_REQUEST['size'] : ''?>">
        </p>
        <p>
            <label for="size">Min value</label>
            <input type="text" name="min" id="min" value="<?=isset($_REQUEST['min']) ? $_REQUEST['size'] : ''?>">
        </p>
        <p>
            <label for="max">Max value</label>
            <input type="text" name="max" id="max" value="<?=isset($_REQUEST['max']) ? $_REQUEST['size'] : ''?>">
        </p>
        <p>
            <input type="submit" name="submit" value="Generate">
        </p>
    </form>
    </form>
    <?php
     /*   echo "POST";
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        echo "GET";
        echo "<pre>";
        var_dump($_GET);
        echo "</pre>";*/

       /* echo "REQUEST";
        echo "<pre>";
        var_dump($_REQUEST);
        echo "</pre>";*/

       if($_REQUEST['submit']){
           if(count($_REQUEST) == 4){
               if($_REQUEST[size] && $_REQUEST['min'] && $_REQUEST['max']){
                   if($_REQUEST['min'] < $_REQUEST['max'])
                       $array = [];
                       for ($i = 0; $i < intval($_REQUEST['size']); $i++) {
                           $array[] = rand($_REQUEST['min'], $_REQUEST['max']);
                       }
                       echo "<pre>";
                       var_dump($array);
                       echo "</pre>";
                   }else{
                       echo "min должен быть меньше max";
                   }
               }
           }
    ?>
</body>
</html>
