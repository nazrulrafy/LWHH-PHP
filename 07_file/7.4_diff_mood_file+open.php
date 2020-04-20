<?php 
$file="C:\\wamp64\\www\\hasin\\07_file\\data\\test03.txt";
$fp=fopen($file,"r+");
$line=fgets($fp);
echo $line;
fwrite($fp,"sahera");
$line=fgets($fp);
echo $line;