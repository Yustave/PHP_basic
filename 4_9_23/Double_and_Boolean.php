<?php

header("Content-type:text/plain");
$x = 20;
$y = 20.4552513122;

echo $x+$y;

$a= "";
$b= 0;
echo "\r";
echo $a ? "True" : "False" ;//blank space return False
echo "\r";
echo $b ? "True" : "False" ;//0 return False
$c= null;
echo "\r";
echo $c ? "True" : "False"; //Null return False
$d= array();
echo "\r";
echo $d ? "True" : "False";


?>