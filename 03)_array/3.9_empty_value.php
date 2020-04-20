<?php 
//isset(),empty()

$name=0;//also set '',0,false
if(isset($name)){
    echo "value is set";
}else{
    echo "value is not set";
}
echo "\n==================\n";

if(empty($name)){
    echo "value is empty";
}else{
    echo "value is not empty";
}

echo "\n==================\n";

if(isset($name) && (is_numeric($name) || $name !="")){
    echo "value is set and its not empty";
}else{
    echo "value is either not set or its empty";
}