<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTTP Request</title>
</head>
<body>
    <form action="" method="get">
        <p>
        <label for="size">Array size</label>
        <input type="text" name="size" id="id" value="<?= isset($_REQUEST['size']) ? $_REQUEST['size'] : '' ?>">
        </p>
        <p>
        <label for="min">min value</label>
        <input type="text" name="min" id="min" value="<?= isset($_REQUEST['min']) ? $_REQUEST['min'] : '' ?>">
        </p>
        <p>
            <label for="max">max value</label>
            <input type="text" name="max" id="max" value="<?= isset($_REQUEST['max']) ? $_REQUEST['max'] : '' ?>">
        </p>
        <p>
            <input type="submit" name="submit" value="Generate">
        </p>


    </form>
<pre>
    <?php
//
//        echo "Post <br>";
//
//        var_dump($_POST);
//                echo "Get";
//        var_dump($_GET);
//    echo "Request <br>";
//    var_dump($_REQUEST);

    if($_REQUEST['submit']){
        if(count($_REQUEST) == 4) {
            if($_REQUEST['size'] && $_REQUEST['min'] && $_REQUEST['max']) {
                if($_REQUEST['min'] < $_REQUEST['max']) {
                    $array = [];
                    for($i = 0; $i < intval($_REQUEST['size']); $i++ ) {
                        $array[] = rand($_REQUEST['min'], $_REQUEST['max']);
                    }
                    var_dump($array);
                }
                else {
                    echo "min должен быть меньше max";
                }
            }
        }
    }

    ?>
</pre>









</body>
</html>