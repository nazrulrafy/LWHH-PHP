<?php 
//when a function declared itself is called recursive function
// when create a recursive function declare a breaking condition at start

function printN($i){
    if($i >=20){
        return;
    }
    echo $i.PHP_EOL;
    $i++;
    printN($i);
}
//printN(10);

function printNumber($start,$end,$step=2){
    if ($start >=$end){
        return;
    }
    echo $start."\n";
    $start+=$step;
    printNumber($start,$end,$step);
}
printNumber(10,20);