<?php 
// indexed array==> sort(),rsort()
// $fruits=["apple","banana","plum","orange","date","mango","lichi","guava"];
// $number=[10,30,80,70,40,20,50,60];
// sort($fruits);
// rsort($number);
// print_r($fruits);
// print_r($number);


//associative array ==>asort(),arsort(),ksort(),krsort()
// $fruits=["d"=>"apple","e"=>"banana","b"=>"plum","c"=>"orange","f"=>"date","a"=>"mango"];
// krsort($fruits);
// print_r($fruits);


//number sorting
//$number=[10,30,80,70,40,20,50,60];
// asort($number);
// print_r($number);
// for($i=0;$i<=count($number);$i++){
//     echo $number[$i].PHP_EOL;
// }
// foreach($number as $val){
//     echo $val.PHP_EOL;
// }

//string sort
$number=[10,1,11,17,13,302,33,3,80,70,7,40];
sort($number,SORT_STRING);
print_r($number);

$fruits=["apple","banana","plum","Apple","Amar","Orange","date","mango","Brinjal"];
sort($fruits,SORT_STRING | SORT_FLAG_CASE);
print_r($fruits);