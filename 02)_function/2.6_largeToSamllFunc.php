<?php 
//divided a function into small parts for managing code properly
function doTaskA(){
    echo "Step A done \n";
}
function doTaskB(){
    echo "Step B done \n";
}
function doTaskC(){
    echo "Step C done \n";
}
function doTaskD(){
    echo "Step D done \n";
}
function doThatlargeTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
}
doThatlargeTask();