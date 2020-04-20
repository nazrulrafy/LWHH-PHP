<?php 
$number=range(30,60);
$rand=mt_rand(0,30);
//echo($number[$rand]);

$luck=$number[$rand];
if($luck%2==0){
    echo "Head";
}else{
    echo "Tail";
}
echo "==================\n";

shuffle($number);
print_r($number);
$shuffle=$number[2];
echo $shuffle;

