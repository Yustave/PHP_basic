<?php

$str = "Yustave La Van";

$bol = preg_match("/sta/",$str);
$bol1 = preg_match("/^sta/",$str);  //^ = first
$bol2 = preg_match("/sta $/",$str); // $ = last 
$bol3 = preg_match("/^sta $/",$str);

echo $bol ?'true' :' false' ;
echo "<br>";
echo $bol1 ?'true' :' false' ;
echo "<br>";
echo $bol2 ?'true' :' false' ;
echo "<br>";
echo $bol3 ?'true' :' false' ;

?>