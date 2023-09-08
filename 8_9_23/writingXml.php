<?php

$xmldata = [
    "name"=>"Yustave",
    "age"=>"19",
    "gender"=>"Male"
];
$str= "";

$str .="<coder>";
foreach($xmldata as $keys => $values){
    $str .= "<".$keys.">";
    $str .= $values;
    $str .= "<".$keys."/>";
}
$str .="</coder>";

print_r($str);

?>