<?php

header("Content-type:text/plain");
//index array
$name= array();
$name[0] = "Yustave";
$name[1] = "Lavan";
$name[2] = "Kenshin";

echo $name[2], "\r";
echo count($name), "\r";

$object=array("car","train","ship","phone","bottle");
echo count($object),"\r";

//associtaed array
$f= array();
$f["a"] = "Yustave";
$f["b"] = "La van";
$f["c"] = "Kenshin";

echo $f["b"], "\r";
echo count($f),"\r";

$namae=array(
    "a" => "Yustave",
    "b" => "La van",
    "c" => "Kenshin"
);

echo $namae ["c"],"\r";

// multiple_dimention

$multA = array(
    array("car","train","ship","phone","bottle"),
    array("one","two","three")
);

echo $multA[1][2],"\r";
echo count($multA),"\r";

?>