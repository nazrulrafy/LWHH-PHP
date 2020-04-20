<?php 
$str="This is nazrul rafi";
$len=strlen($str)-1;

for($i=$len;$i>=0;$i--){
    echo $str[$i];
}
echo PHP_EOL;

$length=strlen($str);
for($i=1;$i<=$length;$i++){
    echo $str[$i*-1];
}
echo PHP_EOL;

echo strrev($str);
echo PHP_EOL;

$arr=explode(' ',$str);
function rev($a){
    $len=strlen($a)-1;
    for($i=$len;$i>=0;$i--){
        echo $a[$i];
    }
    echo " ";
}
array_filter($arr,"rev");