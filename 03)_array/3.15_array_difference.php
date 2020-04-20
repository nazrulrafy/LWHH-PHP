<?php 
//difference and intersect between index and associative array
//array_intersect(),array_intersect_assoc(),array_diff(),array_diff_assoc()
//assoc means check with key

$num01=[5,8,9,30,54,18,6,75,14,58];
$num02=[5,8,19,3,54,8,6,74,4,58];

$fruits01=["d"=>"apple","e"=>"banana","c"=>"date","b"=>"plum"];
$fruits02=["c"=>"orange","f"=>"date","b"=>"plum"];

$intersect_ind=array_intersect($num01,$num02);
$intersect_ass=array_intersect($fruits01,$fruits02);


// $diff_ind=array_diff($num01,$num02);
$diff_ind=array_diff($fruits01,$fruits02);
$difff_ind=array_diff_assoc($fruits01,$fruits02);
print_r($diff_ind);
print_r($difff_ind);

$intersect_ass=array_intersect($fruits01,$fruits02);
print_r($intersect_ass);