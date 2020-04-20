<?php 
$num=5;
function factorial($n){
    if(gettype($n)!="integer"){
        return  "invalid";
    }
    $result=1;
    for($i=$n;$i > 1;$i--){
        $result*=$i;
    }
    return $result;
}
echo "$num factorial is ".factorial($num);
echo "\n";

function factToSeries($n){
    $fact=array();
    for($j=1;$j<=$n;$j++){
        $result=1;
        for($i=$j;$i >1;$i--){
            $result*=$i;
        }
        array_push($fact,$result);
    }
    return $fact;
}
$val=factToSeries(5);
for($i=0;$i<count($val);$i++){
    echo "factorial is ".$val[$i]."\n";
}