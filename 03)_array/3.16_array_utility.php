<?php
/*
    array_walk()
    array_map()
    array_filter()
*/

$num=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
function sqr($n){
    printf("Square number of %d is %d \n",$n,$n*$n);
}
array_walk($num,"sqr");

function cube($n){
    return $n*$n*$n;
}
$cube=array_map("cube",$num);
print_r($cube);


$even=array_filter($num,function($n){return $n%2==0;});
$odd=array_filter($num,function($n){return $n%2==1;});

print_r($even);
print_r($odd);

$persons=["jamal","kamal","jashim","jhumur","abdul","halim","helal","hakim"];

function filterByJ($name){
    return $name[0]=="j";
}
$newPersons=array_filter($persons,"filterByJ");
print_r($newPersons);