<?php

$json = array(
    [
    "name"=>"Yustave",
    "age"=>"19",
    "gender"=>"Male"]
    ,
    ["name"=>"Yustave",
    "age"=>"19",
    "gender"=>"Male"]
    );

echo json_encode($json). "<br>" ;


$file = "test.json";
$handler = fopen($file, 'r');
$jason_data= fread($handler,filesize($file));



foreach(json_decode($jason_data) as $keys=>$values){
    foreach($values as $k => $value)  {
        echo $k . '=>' .$value. "<br>";
    }   
};

?>