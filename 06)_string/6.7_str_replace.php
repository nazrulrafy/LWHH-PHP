<?php 
$str="quick brown fox jum over the lazy brown dog";
$rep=str_replace("brown","red",$str);
echo $rep.PHP_EOL;

$str02="Quick brown fox jump over the lazy Brown dog and white cat ";
$rep02=str_ireplace(array("brown","white"),array("green","red"),$str02,$count);
echo $rep02.PHP_EOL;
echo "total count is ".$count;