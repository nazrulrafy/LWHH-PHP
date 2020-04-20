<?php 
$file="C:\\wamp64\\www\\hasin\\07_file\\data\\test05.txt";
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

/*
=========Manually Read and Write=================

$fp=fopen($file,"w");
foreach($students as $student){
    $data=sprintf("%s,%s,%s,%s,%s\n",$student["fname"],$student["lname"],$student["age"],$student["sub"],$student["roll"]);
    fwrite($fp,$data);
}
fclose($fp);

$fp=fopen($file,"r");
while($line=fgets($fp)){
    $ind=explode(",",$line);
    printf("Name:%s %s\nAge:%s\nSubject:%s\nRoll:%s\n\n",$ind[0],$ind[1],$ind[2],$ind[3],$ind[4]);
};
fclose($fp);

*/


/*
============Save As SVG format============

$fp=fopen($file,"w");
foreach($students as $student){
  fputcsv($fp,$student);
}
fclose($fp);
   
$fp=fopen($file,"r");
while($student=fgetcsv($fp)){
    print_r($student);
}
fclose($fp);
*/


/*
======Add new Data=======

$newapp= array(
    "fname"=>"samiya",
    "lname"=>"samee",
    "age"  =>24,
    "sub"  =>"islamic stadies",
    "roll" =>55,
);
$fp=fopen($file,"a");
fputcsv($fp,$newapp);
fclose($fp);

*/
/*
=====Data Delete From File====

$data=file($file);
unset($data[3]);
print_r($data);
$fp=fopen($file,"w");
foreach($data as $line){
    fwrite($fp,$line);
}
fclose($fp);
*/