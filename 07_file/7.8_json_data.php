<?php 
$file="C:\\wamp64\\www\\hasin\\07_file\\data\\test07.txt";
$students=array(
    array(
        "fname"=>"sahera",
        "lname"=>"pritu",
        "age"  =>25,
        "sub"  =>"economics",
        "roll" =>57,
    ),
    array(
        "fname"=>"marzana",
        "lname"=>"manni",
        "age"  =>26,
        "sub"  =>"mathmatics",
        "roll" =>85,
    ),
    array(
        "fname"=>"jannatul",
        "lname"=>"mawa",
        "age"  =>27,
        "sub"  =>"statistics",
        "roll" =>51,
    ),
);
$encode=json_encode($students);
file_put_contents($file,$encode);

$get_cont=file_get_contents($file);
$decode=json_decode($get_cont,true);
print_r($decode);