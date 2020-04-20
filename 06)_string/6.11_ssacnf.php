<?php 
$str="nazrul rafi 01611706341 rafi@gmail.com";
$parts=sscanf($str,"%s %s %11s %s");
print_r($parts);

sscanf($str,"%s %s %11s %s",$fname,$lname,$num,$email);
echo $fname." ".$email;

$hex="#FF2F44";
sscanf($hex,"#%2x%2x%2x",$red,$green,$blue);
echo "\n".$red." ".$green." ".$blue;