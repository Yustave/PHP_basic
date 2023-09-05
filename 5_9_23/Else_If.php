<?php

 $x = 40;
 $y = 80;
 $z = 100;

 $a;

 $a = 90;
 
if($a == $z){
    echo "Congaratulation You got FULL POINTS";
} elseif( $a >= $y ){ 
    echo "How ever You did WELL";       
} elseif($a >= $x) {
    echo 'You barely make it';
} elseif($a >= 0) {
    echo "what's wrong with you";
} else {
    echo 'INPUT ERROR';
} // if_elseif stament consider the condtions above

if($a == $z){
    echo "Congaratulation You got FULL POINTS";
} elseif($a >= $y && $a < $z) {
    echo "How ever You did  WELL";
}elseif ($a >= $x && $a < $y ){
    echo 'You barely make it';
}elseif($a >= 0 && $a < $x) {
    echo "what's wrong with you";
} else {
    echo 'INPUT ERROR';
} //logical operator is require in doubel checkking conditions


?>