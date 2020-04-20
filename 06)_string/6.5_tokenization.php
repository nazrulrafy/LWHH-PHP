<?php 
//explode(),implode(),join(),str_split()

$str="Hi dear This is nazrul rafi";
$arr=explode(" ",$str);
print_r($arr);

$join=join(" ",$arr);
print_r($join);

$split=str_split($str);
print_r($split);

$strtok=strtok($str," ,");
while($strtok !==false){
    echo $strtok.PHP_EOL;
    $strtok=strtok(" ,");
}

echo PHP_EOL;
$string="Quick brown fox jump over the lazy dog";
$preg=preg_split("/ |,/",$string);
print_r($preg);