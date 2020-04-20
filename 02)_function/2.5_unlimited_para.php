<?php 

function sum(...$num){
    $result=0;
    for($i=0;$i<count($num);$i++){
        $result+=$num[$i];
    }
    return $result;
}
echo sum(5,6,7,8,9,10);
echo "\n";

function unlimited($x,$y,...$num){
    echo $x.PHP_EOL;
    $result=0;
    for($i=0;$i<count($num);$i++){
        $result+=$num[$i];
    }
    return $result;
}
echo unlimited(5,10,15,20);