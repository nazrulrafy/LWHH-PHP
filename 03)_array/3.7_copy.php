<?php 
//copy by value or deep copy
$person=[
    "fname"=>"jannatul",
    "lname"=>"mawa",
];
$deep=$person;
$deep['lname']="maisa";
print_r($person);
print_r($deep);

//copy by reference of shallow copy
$shallow=&$person;
$shallow['lname']="naima";
print_r($person);
print_r($shallow);

echo "====================\n";

function printData(&$person){
    $person["fname"].=" changed";
    print_r($person);
}
printData($person);
print_r($person);