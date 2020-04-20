<?php 
$file="C:\\wamp64\\www\\hasin\\07_file\\data\\test06.txt";
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

// $data=serialize($students);
// file_put_contents($file,$data);

// $getcontent=file_get_contents($file);
// $unserial=unserialize($getcontent);
// print_r($unserial);

// $data=serialize($unserial);
// file_put_contents($file,$data,LOCK_EX);

/*
====Array Insert====
$newapp= array(
    "fname"=>"samiya",
    "lname"=>"samee",
    "age"  =>24,
    "sub"  =>"islamic stadies",
    "roll" =>55,
);
array_push($students,$newapp);
$data=serialize($students);
file_put_contents($file,$data,LOCK_EX);
$getcontent=file_get_contents($file);
print_r(unserialize($getcontent));
*/