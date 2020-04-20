<?php 
//array_merge()

$fruits=["apple","banana","plum","orange","date","mango","lichi","guava"];
$fruit01=array_slice($fruits,0,3);
$fruit02=array_slice($fruits,5,2,true);
$fruit03=["pineapple","jackfruit"];
$merge=array_merge($fruit01,$fruit02,$fruit03);
$arrayPlus=$fruit01+$fruit02+$fruit03;
// print_r($merge);
// print_r($arrayPlus);


$num=["a"=>10,"b"=>20,"c"=>30,"d"=>40,"e"=>50,10=>12,"f"=>60,"g"=>70];       
$n01=array_slice($num,0,2,true);
$n02=array_slice($num,4,7,true);
$n03=["j"=>87,"k"=>78];

$randomData=array_splice($num,2,2,array("j"=>87,"k"=>78));
$randcorrect=$n01+$n02+$n03;

print_r($randomData);
print_r($randcorrect);