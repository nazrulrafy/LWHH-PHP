<?php 
$fruits=array("a"=>"Apple","b"=>"Banana","c"=>"Cherry","d"=>"date");
// shuffle($fruits);
// print_r($fruits);
$key=array_rand($fruits);
print_r($fruits[$key]);
