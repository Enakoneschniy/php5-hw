<?

    function hello(){
        echo 'Hello world!';
    }

    hello();

echo "<hr>";

function sum($a, $b){
    // $sum = $a + $b;
    return $a * $b;
}

if(!function_exists('sum')){
    function sum($a, $b){
        return $a + $b;
    }
}
/*$var1 = 2;
$var2 = 3;*/

echo sum($var1, $var2), "<br>";

echo sum(34, 2), "<br>";

function allSum(...$params){
    $sum = 0;
    foreach ($params as $param){
        $sum += $param;
    }
    return $sum;
}

echo allSum(45, 57, 34, 34, 67), "<br>";

function foo($a, $b, $c = 2){
    return $a + $b - $c;
}

echo foo(10, 3), "<br>";

echo "<hr>";

$foo = function ($a, $b){
    return $a * $b;
};

echo $foo(2, 3), "<br>";

$func = "foo";

echo $$func(3, 3), "<br>";
echo $func(3, 4), "<br>";

echo "<hr>";

//global $x;
$x = 5;
$GLOBALS['d'] = 10;
function getx(){
    global $x;
    global $d;
    return $x + $d;
}

echo getx();

echo "<hr>";
$arg = 10;
$d = 5;
$closure = function ($a, $v) use ($arg, $d){
    return $a * $v / $arg + $d;
};

echo $closure(2, 3);

echo "<hr>";

function password($size = 6){
    $template = "qwertyuiop[]jCFGHTNhghtjvejfhfgv,kaJNBHH.,ih-";
    return substr(str_shuffle($template), 0, $size);
}

echo password(10);

echo "<hr>";

function walk_array($array, $function){
    foreach ($array as $key => $item){
        $function($key, $item);
    }
}

$arr = [1, 2, 3, 4, 5, 6, 7];
$k = "kkk";
walk_array($arr, function ($key, $value) use ($k){
    echo $key." : ".$value.$k."<br>";
});

function bar(){
   return function ($a){
        echo "inside: ".$a;
    };
}

$res = bar();
$res(44);