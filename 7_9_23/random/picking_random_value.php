<?php

header("Content-type:text/plain");

echo rand(),"\r";

echo rand(1,7),"\r";

srand(microtime() * 1000000000000);
echo rand();

?>