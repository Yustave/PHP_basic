<?php

$ary = [];
echo count($ary)."<br>";

array_push($ary, "one")."<br>";
print_r($ary);

array_push($ary, "two");
array_push($ary, "three");
array_push($ary, "four");

echo count($ary). "<br>" ;
print_r($ary);
echo "<br>";

array_pop($ary);
print_r($ary);
echo "<br>";

array_shift($ary);
print_r($ary);

?>