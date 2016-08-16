<html>
<head>
    <meta  charset=utf-8\">
    <title>home_work_6</title>
</head>
<body>

    <center>

        <h1 style="font-style:italic">Task 6.1 </h1>
        <hr>

        <form action="" method="GET">
            <label for="size">Размер матрицы</label>
            <input type="text" name="size">
            <input type="submit">
        </form>




        <?php
        $n = $_REQUEST['size'];
                for ($i=1; $i <= $n; $i++){
                    for ($j=1; $j<=$n; $j++) {
                        $q=$i*$j;

                        echo $q. "|";

                     }

                     echo "<br>";
                }



        $matrix = $_REQUEST['size'];
        $interim= array();
        function get_elem($row,$pos)
        {
            global $interim;

            if(isset($interim[$row][$pos]))
            {
                return $interim[$row][$pos];
            }

            if($row==1 and $pos==1)
            {
                return 1;
            }
            else if($pos==0)
            {
                return 0;
            }
            else if($pos>$row)
            {
                return 0;
            }
            return get_elem($row-1,$pos-1)+get_elem($row-1,$pos);
        }


        for($i=1;$i<=$matrix;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo $interim[$i][$j]=get_elem($i,$j);
                if($i!=$j)
                {
                    echo ' ';
                }
            }
            echo '<br>';
        }
    ?>

</center>

<center>
    <hr>
    <h1 style="font-style:italic">Task 6.3.1 </h1>
    <hr>

    <form action="" method="GET">
        <input type="text" name="name">
        <input type="submit">
    </form>
    <?php
        $name = $_REQUEST['name'];
     echo 'Привет,'.$name;
    ?>


    <hr>
    <h1 style="font-style:italic">Task 6.3.2 </h1>
    <hr>
    <form action="" method="GET">
        <label for="size">Name</label>
         <input type="text" name="name" style="width: 160px; margin-right: 20px; ">
        <label for="size">Age</label>
         <input type="text" name="age"  style="width: 40px; margin-right: 20px; ">
        <label for="size">Message</label>
        <textarea name="message" style="width: 160px; height: 80px; margin-right: 20px;"></textarea>
         <input type="submit">
    </form>
    <?php
        $age = strip_tags($_REQUEST['age']);
        $name = strip_tags($_REQUEST['name']);
        $message = strip_tags($_REQUEST['message']);
     echo "Привет, $name, $age <br> твое сообщение: $message";
    ?>

    <hr>
    <h1 style="font-style:italic">Task 6.3.3 </h1>
    <hr>

    <?php
    if (empty($_REQUEST['age']))
    {
        ?>
        <form action="" method="GET">
            <label for="size">Возраст</label>
            <input type="text" name="age" style="width: 40px; margin-right: 20px;">
            <input type="submit">
        </form>
        <?php
    }
    ?>

    <?php
    if (!empty($_REQUEST['age']))
    {
        $age = strip_tags($_REQUEST['age']);
        echo 'Ваш возраст: '.$age;
    }
    ?>








