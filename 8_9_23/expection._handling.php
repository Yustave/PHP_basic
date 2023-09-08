<?php

$file = "test.txt";
try{
    if (file_exists($file)){
        fopen($file,'r');
        $size=filesize($file);
        fread($file,$size);
    }

    else
    { 
        // die("404 Error not found");
        // exit("404 Error not found");
        echo 'file not found blah';//will not working when "exit" and "die"functions are activited
       throw new Exception("404 Error not found");
        }
}catch(Exception $e){
    echo $e->getmessage();
}

?>
