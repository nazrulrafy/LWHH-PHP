<?php 
//array to string with the help of JSON or serialize
// serialize(),unserialize(),json_encode(),json_decode(),urlencode(),urldecode()

$student=[
    "fname"     =>"Sahera",
    "lname"     =>"Pritu",
    "class"     =>10,
    "roll"      =>25,
    "section"   =>"B"
];
$serialized=serialize($student);
echo $serialized;
print_r(unserialize($serialized));

echo "===================\n";
//JSON format
$encode=json_encode($student);
echo $encode;
print_r(json_decode($encode));