<?php 
$str="Hello World";
echo $str[0].PHP_EOL;
echo $str[-5].PHP_EOL;
$sub=substr($str,-3);
$sub=substr($str,6);

echo $sub.PHP_EOL;
$len=strlen($str);
echo substr($str,$len-4,2).PHP_EOL;
echo substr($str,-7,-2);