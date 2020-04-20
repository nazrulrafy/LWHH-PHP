<?php 
//array_slice()

$fruits=["apple","banana","plum","orange","date","mango","lichi","guava"];
//$somefruits=array_slice($fruits,2);
//$somefruits=array_slice($fruits,2,3);
//$somefruits=array_slice($fruits,2,-4);
$somefruits=array_slice($fruits,2,4,true);
print_r($somefruits);

echo "===================\n";
$num=["a"=>10,"b"=>20,"c"=>30,"d"=>40,"e"=>50,10=>12,"f"=>60,"g"=>70];
//$slice_asso=array_slice($num,2,-1);
$slice_asso=array_slice($num,2,-1,true);
print_r($slice_asso);