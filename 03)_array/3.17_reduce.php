<?php 
$num=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
function sum($old_val,$new_val){
    return $old_val+$new_val;
}
$sum=array_reduce($num,"sum");
echo $sum;

function evenSum($old_val,$new_val){
    if($new_val%2==0){
        return $old_val+$new_val;
    }
    return $old_val;
}

$sumation=array_reduce($num,"evenSum",4);
echo "\n".$sumation;