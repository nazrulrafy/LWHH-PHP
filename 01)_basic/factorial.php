<?php 
// $fact=1;
// $n=5;
// for($i=$n;$i > 0;$i--){
//     $fact*=$i;
// }
// echo $fact.PHP_EOL;

//find out 1-10 factorial
$n=5;
for($j=1;$j<=$n;$j++){    
    $fact=1;
    for($i=$j;$i>0;$i--){
    $fact*=$i;
    }
    echo "$j factorial is $fact".PHP_EOL;
}
echo "=================\n";
//ShortCode
$result=1;
for($i=1;$i<=10;$i++){
    $result*=$i;
    echo "$i factorial is $result".PHP_EOL;
}