<?php 
//in_array(),array_search(),key_exists()

$fruits=["d"=>"apple","e"=>"banana","b"=>"plum","c"=>"orange","f"=>"date","a"=>"mango"];
$fruits02=["d"=>"apple","e"=>"banana","b"=>"plum","c"=>"orange","f"=>"date","a"=>"mango"];
$number=["10",1,11,17,13,302,33,3,80,70,7,40];

if(in_array(10,$number,true)){
    echo "desire number is found";
}else{
    echo "desire number is not found";
}
echo "\n==================\n";
if(in_array("apple",$fruits02)){
    echo "desire value is found";
}else{
    echo "desire value is not found";
}

echo "\n==================\n";
$search=array_search("apple",$fruits);
echo $search;

echo "\n==================\n";
$key=key_exists("d",$fruits);
if($key){
    echo "Key is exists";
}else{
    echo "Key is not exists";
}
