<?php

function create($creatfile){
    
    $handler = fopen($creatfile,'w');
    fclose($handler);   
}

function write($writefile,$data){
    $handler= fopen($writefile,'w');
    fwrite($handler,$data );
    fclose($handler);
}

function append($appendfile,$data){
    $handler = fopen($appendfile ,'a');
    fwrite($handler, "$data");
    fclose($handler);
}

function read($readfile){
    $handler = fopen($readfile, 'r');
    $size = filesize($readfile);
    $data = fread($handler,$size);
    fclose($handler);
    return $data;
}
create("C_test.txt");
write("W_text.txt","Hello World");
append("A_test.txt","hello world");
echo read("A_test.txt");
echo read("W_text.txt");

function readmyfile($filename){
    if(file_exists($filename)){
        return $data = file_get_contents($filename);    
    }else{
        echo "File Do Not Exist";
    }
}

readmyfile("blah.txt");
?>