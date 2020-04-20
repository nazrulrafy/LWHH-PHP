<?php 
//Details of associative array
//array_keys(),array_values()
$foods=array(
    "vegetable"=>"brinjal,bolsam,cucumber,pumkin,betal",
    "fruits"   =>"apple,orange,grape,dates,banana",
    "drinks"   =>"cocacola,frutika,pepsi",
);
$foods["drinks"].=",speed";

$keys=array_keys($foods);
for($i=0;$i<count($keys);$i++){
    $food=$keys[$i];
    echo $foods[$food].PHP_EOL;
}
echo "======================\n";
$keys=array_values($foods);
for($i=0;$i<count($keys);$i++){
    $food=$keys[$i];
    echo $food.PHP_EOL;
}
echo "======================\n";
foreach($foods as $key=> $val){
    echo $key."==>".$val.PHP_EOL;
}