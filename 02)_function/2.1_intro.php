<?php 
//encapsulation

function isEven($n){
    if($n%2==0){
        return true;
    }
    return false;
}
$num=15;
if(isEven($num)){
    echo "$num is even number";
}else{
    echo "$num is odd number";
}