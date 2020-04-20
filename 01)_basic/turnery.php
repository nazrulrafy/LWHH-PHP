<?php 
$num=10;
if($num==12){
    echo "This number is twelve";
}else if($num==10){
    echo "This number is ten";
}else{
    echo "Just a number";
}
echo "\n";
$number= (12==$num) ? "twelve" :(($num == 10)?"Ten":"Just a number");
echo $number;