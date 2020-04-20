<?php 
$file="C:\\wamp64\\www\\hasin\\07_file\\data\\test.txt";
$fp=fopen($file,"r");
$line=fgets($fp);
echo $line;
while($line=fgets($fp)){
    echo $line;
}
rewind($fp);
while($line=fgets($fp)){
    echo $line;
}
fclose($fp);

$data=file($file);
print_r($data);
echo "\n";
$data02=file_get_contents($file);
print_r($data02);