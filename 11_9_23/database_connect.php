<?php

define('DB_HOST','localhost');
define('DB_NAME','test1');
define('DB_USER','root');
define('DB_PASS','');

function dbconnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    errordebugger($db);
    return $db;
}
dbconnect();

function errordebugger($data){
    echo "<pre>". print_r($data,true) . "</pre>";
}

function passGen($pass){
   $pass = md5($pass);
   $pass = sha1($pass);
   $pass = crypt($pass,$pass);
}

function if_errorchecker(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   if (mysqli_connect_errno() > 0){
    die("connnection error");}
    else{
        return $db;}
}
if_errorchecker();
errordebugger(if_errorchecker());


?>