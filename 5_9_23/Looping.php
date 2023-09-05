<?php
header("Content-type:text/plain");
//For_Loop
for ( $i = 0 ; $i < 10 ; $i++){
    echo "The value isn't enough\r";
}echo "The requires are fulfill\r\r\r";

//while_loop
$age=55;
while ($age<= 60){
    echo "You can still be part of goverment \r";
    $age++;
}echo "It's time for you to retire\r\r\r";

//do_while_loop
$s = 20 ;
header("Content-type:text/plain");

do{
    echo " Adding your points\r";
    $s+=2;

}while ($s < 40);
echo "You have reach maximum points can store in you levle";

?>