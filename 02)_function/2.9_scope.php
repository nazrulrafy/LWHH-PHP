<?php 

$fname="jannatul";
$lname="Mawa";

function scope(){
    // global $fname;
    // global $lname;
    
    //echo "My name is $fname $lname";
    echo "My name is ".$GLOBALS['fname']." ".$GLOBALS['lname'].PHP_EOL;
}
scope();

function another(){
    static $i;
    $i=$i ?? 0;
    $i++;
    echo $i.PHP_EOL;
}
another();
another();
another();
another();
another();


function sum(){
    static $i;
    $i=$i ?? 0;
    $i++;
    echo $i.PHP_EOL;
}