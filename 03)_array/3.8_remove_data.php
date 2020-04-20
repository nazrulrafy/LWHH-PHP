<?php 
//unset()
$person=[
    "fname"=>"jannatul",
    "lname"=>"mawa",
    'friend'=>"nazrul rafi"
];
print_r($person);
unset($person['lname']);
print_r($person);