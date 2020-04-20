<?php 
$name="Nazrul Rafi";
$age=16;
$word="age";

echo "This is {$name} \n";
echo 'This is $name';
echo "\n".$$word."\n";  

//constant
define("NAME","Jannatul Mawa");
echo NAME; 