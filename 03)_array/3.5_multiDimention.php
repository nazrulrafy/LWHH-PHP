<?php 
$foods=array(
    "vegetable"=>explode(",","brinjal,bolsam,cucumber,pumkin,betal"),
    "fruits"   =>explode(",","apple,orange,grape,dates,banana"),
    "drinks"   =>explode(",","cocacola,frutika,pepsi"),
);
array_push($foods["drinks"],"miranda");

$arr=count($foods['vegetable']);

for($i=0;$i<$arr;$i++){
    echo $i."=>".$foods['vegetable'][$i].PHP_EOL; 
}

echo "===================\n";
$sam02=[
    [10,20,30,40,50],
    [20,30,40,50,60],
    [50,60,70,80,[5,6,7,8,9]]
];
$extr=$sam02[2][4];
$pritu=count($extr);

for($i=0;$i<$pritu;$i++){
    echo $extr[$i].PHP_EOL;
}