//Задача1

<?php
echo "<hr>";
$a = 50;
 $n = 0;

 for($i = 1; $i <= $a; $i+=3) {
        echo $i."<br>";
     $n += $i;

 }
echo $n+$a;

echo "<hr>";

//Задача2

$a=15;
$arr=[];
for ($i=1;$i<=$a;$i++){
    $arr[$i]=$i*$i;

}
 echo "<pre>";
print_r ($arr);
echo "</pre>";
echo "<hr>";


//Задача3
$a=15;
$arr1=[];
for($i=0;$i<=$a;$i++){
    if($i%2==0){
        $arr1[$i]=0;
    }else{
        $arr1[$i]=1;
    }
}
echo "<pre>";
print_r ($arr1);
echo "</pre>";
echo "<hr>";
//Задача4

$arr3=array(1,1,2,3,4,4,5,5,6,7,7,8,8,9,9,9,9,9,10,10);
echo "<pre>";
print_r(array_diff(array_count_values($arr3), array()));
echo "</pre>";
echo "<hr>";

//Задача5
$arr2=array(1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8,9,9,10,10);
$array = (array_count_values ($arr2));
while (current($array))
{
    $value = key($array);
    next($array);
    print "$value<br>";
}

echo "<hr>";



