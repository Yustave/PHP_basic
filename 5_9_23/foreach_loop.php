<?php

header("Content-type:text/plain");

$object=array("car","train","ship","phone","bottle","book","pencil","pen","mouse","charger","clothes");
foreach ($object as $x){
    echo $x, "\r";
}


$namae=array(
    "a" => "Yustave",
    "b" => "La van",
    "c" => "Kenshin"
);

foreach( $namae as $keys=>$y){
    echo $keys . "=>". $y . "\r";
}

?>