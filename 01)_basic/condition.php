<?php 
$num=10;
if($num%2==0){
    echo "$num is an even number";
}else{
    echo "$num is a odd number";
}
echo "\n";
//leap year
/*
    divisible by 4 ?
    divisible by 100 ?
    divisible by 400 ?
*/
$year=2015;
if($year%4==0 && $year%100==0 && $year%400==0){
    echo $year." is a leap year";
}else if($year%4==0 && $year%100==0 ){
    echo $year." is not a leap year";
}else if($year%4==0){
    echo $year." is a leap year";
}else{
    echo $year." is not a leap year";
}

echo "\n";
if($year%4==0 && ($year%100 !=0 || $year%400==0 )){
    echo "$year is a leap year";
}else{
    echo "$year is not a leap year";
}