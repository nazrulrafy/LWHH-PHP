<?php 
//is_writable()
$file="data/test02.txt";
$fp=fopen($file,"a");
//$exixts=file_get_contents($file);
//fwrite($fp,$exixts);

fwrite($fp,"sahera\n");
fwrite($fp,"pritu\n");
fwrite($fp,"marjana\n");
fwrite($fp,"manni\n");
fwrite($fp,"nazrul\n");

fclose($fp);