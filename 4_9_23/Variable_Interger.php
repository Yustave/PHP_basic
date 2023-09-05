<?php
   $x = 20;
   $y = 40;

   echo "$x-$y \r";
   header("Content-type:text/plain");
   echo $x-$y;
   echo "\r";
   echo $x.$y;

    $a=10;
    $b=10;

   $bol= $a==$b;
   echo "\r";
   echo $bol;

   echo PHP_INT_MAX;
   echo PHP_INT_MIN;

   $bol1=  (is_int(PHP_INT_MAX));
   echo "\r",$bol ;
   
?>