<?php 
for($i=20;$i<50;$i++){
    if($i%5==0){
        echo $i.PHP_EOL;
    continue;
    }
}
echo "====================\n";
//0,1,1,2,3,5,8,13
$first=0;
$middle=1;
$last=1;

for($i=0;$i<10;$i++){
    echo $first." ";
    $middle=$last;
    $last=$middle+$first;
    $first=$middle;
}
?>
initializer
============
f=0;
m=1
l=1
1st loop
=============
f=
m=1
l =