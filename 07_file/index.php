<?php 
$file="C:\\wamp64\\www\\hasin\\07_file\\data\\test07.txt";
if(file_exists($file)){
    echo "File ".(is_readable($file)?"is":"is not")." readable \n";
    echo "File ".(is_writable($file)?"is":"is not")." writeable";
}