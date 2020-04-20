<?php 
$file="C:\\wamp64\\www\\hasin\\07_file\\data\\test04.txt";
file_put_contents($file,"samiya\n",FILE_APPEND | LOCK_EX);
file_put_contents($file,"samee",FILE_APPEND | LOCK_EX);