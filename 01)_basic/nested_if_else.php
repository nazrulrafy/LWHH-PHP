<?php 
$con01=true;
$con02=false;
$con03=true;

if($con01){
    if($con02){
        if($con03){
            echo "Hello";
        }else{
            echo "No01";
        }
    }else{
        echo "No02";
    }
}else{
    echo "No03";
}

echo "\n";

if($con01 && $con02 && $con03){
    echo "Hello";
}elseif($con01 && $con02){
    echo "No01";
}elseif($con01){
    echo "No02";
}else{
    echo "No03";
}