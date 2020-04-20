<?php 
$color="white";

switch($color){
    case "Red":
    case "Green":
        echo $color." is my favourite color ";
        break;
    case "Black":
        echo "Black is harmful color";
        break;
    default:
        echo "$color is not selected value";
}
echo "\n";
// negative and positive odd,even number
$n=12 ;
$r=$n%2;
switch(true){
    case($r==0 && $n>0):
        echo "$n is a positive even number";
        break;
    case($r==1 && $n>0):
        echo "$n is a positive odd number";
        break;
    case($r==0 && $n<0):
        echo "$n is a negative even number";
        break;
    case($r==1 && $n<0):
        echo "$n is a negative odd number";
        break;
}

echo "\n";
//other use case

$string="8balls";
switch($string){
    case (string) "9balls":
        echo "I have 9 balls";
        break;
    case (string) 8:
        echo "Only Eight";
        break;
    case (string) "8balls":
        echo "I have 8 balls";
        break;
}