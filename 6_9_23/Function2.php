<?php

header("Content-type:text/plain");

function x($y,$x){
      for( $i=0 ; $i <= $y ; $i++){
        $x= $y * $x;
        echo $x. "\r";
      }
     echo  "\r".$x;
}
x(5,3);

echo "\r\r\r";


$arrayData= [1,3,5,6,1,8,9,12,13,15,20,19];
function y($c,$b,$a=20){

    for($f = 0 ; $f < count($b); $f++){
      echo $f . "\r";
    }
    
    $f=0;
    while ($b[$f]<$a) {
        $c=$b[$f]+ $c;
        echo $c . "\r";
        $b[$f++];        
    }echo "end \r";
}


y(21,$arrayData);

//dynamic function call
$var = "y";
$var(30,$arrayData);

// function exit or not?
$dynamic_call_x = "x";
$dyC = "z";

echo function_exists($dyC) ? $dyC : "Error 404 not found";
if (function_exists($dynamic_call_x)){
  $dynamic_call_x(4,5,);
} else {
  echo "Error 404 not found\r\r";
}

//scope
$calculate_data= [1,3,45,5,6];

function calulation(){
  echo "Calculate to get 20479 while using given value \r Given values...... \r";
  global $calculate_data;
  foreach($calculate_data as $values){
    echo $values . "\r";
  }
}

$problem = "calulation";
echo function_exists($problem) ? $problem() : "Error 404 Not Found";

//sttic_varibles
$num= [1,2,3,4];
function consitutive(){
    static $num = [ 1,2,3,4];

    for( $i=0; $i < count($num); $i++) {
        $num[$i]=$num[$i] + 1;
        // echo $num[$i]. "\r";
    }
    foreach($num as $result){
      echo $result. "\t";
    }
    echo "\r\r\r";
}


$static_var= "consitutive";
echo function_exists($static_var) ? $static_var() : "Error 404 NOt Found";
echo function_exists($static_var) ? $static_var() : "Error 404 NOt Found";
echo function_exists($static_var) ? $static_var() : "Error 404 NOt Found";
echo function_exists($static_var) ? $static_var() : "Error 404 NOt Found";

//variable_passing_by_refrence
$refer_var = 32;
$reference_var= &$refer_var;
echo $reference_var. "\r\r\r";

$reference_num = &$num ;

function reference_num(){
  global $reference_num;
  foreach($reference_num  as $result){
    echo $result. "\t";
  }
  echo "\r\r";
}
$text="reference_num";

echo function_exists($text) ? $text() : "Error 404 NOt Found";

echo function_exists($static_var) ? $static_var() : "Error 404 NOt Found";
echo function_exists($text) ? $text() : "Error 404 NOt Found";

echo function_exists($static_var) ? $static_var() : "Error 404 NOt Found";
echo function_exists($text) ? $text() : "Error 404 NOt Found";

echo function_exists($static_var) ? $static_var() : "Error 404 NOt Found";
echo function_exists($text) ? $text() : "Error 404 NOt Found";


?>