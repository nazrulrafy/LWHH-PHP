<?php 
//range()

// $number=[];
// for($i=12;$i<20;$i++){
//     array_push($number,$i);
// }
// print_r($number);

$range=range(10,30,2);
foreach($range as $key => $val){
    if($val %4==0){
        echo $val."\n";
    }
}