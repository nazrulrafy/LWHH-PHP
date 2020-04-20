<?php
$x=30;
$y=20;
function compare($x,$y){
    if($x > $y){
        return 1;
    }elseif ($x==$y){
        return 0;
    }else{
        return -1;
    }
}

if(($x<=>$y)==1){
    echo "$x is greater than $y";
}elseif(($x<=>$y)==0){
    echo "$x is equal $y";
}else{
    echo "$x is smaller than $y";
}