<?php

header("Content-type:text/plain");


// continue
for ($i = 0 ; $i < 11; $i++ ){
    if ( $i >= 5 ) {
        echo "the value is $i \r";
        continue;
    }else{
        continue;
    }
}echo "the value of I can no more identify\r\r\r\r";

// break

$x = 20;

while($x >= 0 ) 
    if ($x == 10) {
      echo " Your stamina can't be dropped below 10";
      break;
    }else{
    echo " Warning \r YOUR STAMINA IS TOO LOW \r";
    $x--;
}echo " Every ability of your charater are now automitically closed \r\r\r\r";

$y = 0;
while($y <= 100 ) 
    if ($y >= 10 && $y <= 100) {
      echo " Your stamina is raising \r your staaina is now $y \r";
      $y+=10;
      continue;
    }else{
    echo null;
    $y+=10;
    
}echo " Now you're fully recoverd";

?>