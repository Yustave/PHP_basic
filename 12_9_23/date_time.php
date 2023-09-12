<?php

//unit time zone to local time zone

date_default_timezone_set('Asia/Rangoon');// 
$ary = getdate();
// echo "<pre>". print_r($ary,true)."</pre>";

$var = date("d-m-Y H:i:s",time());
echo $var;

$var = date("r",time());
echo $var;

// A    = AM/PM
// a    = am/pm
// d    = day of month <01,....,31>
// m    = month of a years
// D    = day of week <3letter>
// F    = month name
// h    = 12-hours format <01,...,12,01,...,12>
// g    = 12-hours format <1,...,12,1,...,12> 
// H    = 24-hours format <01,...,12,13,...,24> 
// G    = 24-hours format <1,...,12,13,...,24> 
// i    = minutes 
// s    = second
// r    = unit time
// z    = day of year
// z    = GMT
?>