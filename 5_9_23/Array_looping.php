<?php
header("Content-type:text/plain");

$s=array("book","pencil","pen","mouse","charger","clothes");
echo "Shoppimg list\r";
for ($i = 0 ; $i < count($s); $i++){
    echo "$s[$i] \r";    
}

echo "\r\r\r";

$x=0;
while ($x < count($s)) {
    echo "$s[$x] \r"; 
    $x++;   
}

echo "\r\r\r";

$multA = array(
    array("car","train","ship","phone","bottle"),
    array("one","two","three"),
    array("book","pencil","pen","mouse","charger","clothes")
);

for($a = 0 ; $a < count($multA); $a++){
    for($b = 0 ; $b < count($multA[$a]) ; $b++){
        echo $multA [$a] [$b],"\r";
    }
    
}

?>