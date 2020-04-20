<?php 
//array_splice()

$fruits=["apple","banana","plum","orange","date","mango","lichi","guava"];
//$cut_fruit=array_splice($fruits,2,3);
$replace=["jackfruit","tarmarind","pineapple"];
$cut_fruit=array_splice($fruits,2,3,$replace);
$num=["a"=>10,"b"=>20,"c"=>30,"d"=>40,"e"=>50,10=>12,"f"=>60,"g"=>70];

print_r($cut_fruit);
print_r($fruits);