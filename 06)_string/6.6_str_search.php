<?php 
$str="Quick brown fox fox jumps over the Fox lazy dog";
echo strpos($str,"fox")."\n";
echo strrpos($str,"fox")."\n";
echo stripos($str,"Fox",12)."\n";
echo strripos($str,"Fox")."\n";

$offset=strpos($str,"Quick");
if($offset !==false){
    echo "word was found \n";
}else{
    echo "word was not found \n";
}