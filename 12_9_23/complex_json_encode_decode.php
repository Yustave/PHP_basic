<?php

$ary = [
    ["one" => 1,"two" => 2],
    ["one" => 1,"two" => 2],
    ["one" => 1,"two" =>
     ["one" => "1","two" => "2"],
     ["one" => "1","two" => "2"]
     ]
];

// echo "<pre>". print_r($ary,true). "</pre>";
$encode = json_encode($ary);
$decode = json_decode($encode,true);
foreach($decode as $val){
    foreach($val as $keys => $data) {
        if(!is_array($data)){
            echo $keys . "=>" . $data . "<br>";
        }else{
            foreach($data as $pointer=>$item){
                echo $pointer ."=>". $item . "<br>";
            }
        }
    echo "<hr>" ;  
    }
}
?>