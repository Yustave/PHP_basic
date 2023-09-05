<?php
header("Content-type:text/plain");
function x(){
    echo "Hello world";
}
x();
echo "\r\r\r\r";

function y($x){
    $y = $x + 30;
    $y = $x = $y;
    echo $y;
}
y(6);
echo "\r\r\r\r";

function z($z){
    
    $a=10;
    while ($z <= 40) {
        $a= $z * 2;
        $z++;
    }
    echo $a;
}
z(35)

?>