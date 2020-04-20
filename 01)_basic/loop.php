<?php 
for($i=1;$i<=10;$i++){
    echo $i.PHP_EOL;
}
$a=0;

while ($a <= 10) {
    echo "Nazrul Rafi";
    echo PHP_EOL;
    $a++;
}
//goto
$i=0;
a: $i++;
echo $i.PHP_EOL;
if($i <10) goto a;

//Multiple stepping

echo "Multiple Stepping";
for($i=11,$j=0;$i >0;$i-=1,$j++){
    echo $i."=".$j.PHP_EOL;
}

//factorial

