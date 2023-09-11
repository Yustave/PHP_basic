<?php 

define('DB_HOST','localhost');
define('DB_NAME','beta');
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

$qry = " CREATE TABLE SUBJECT (
    id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(225) UNIQUE NOT NULL,
    created_at date,
    updated_at date)
    ;";
$db = dbconnect();
$result = mysqli_query($db,$qry);
echo $result ? "Table Created" : "Fail to Create Table";

$qry = " CREATE TABLE IF NOT EXISTS  users(
    id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(225) UNIQUE NOT NULL,
    creator VARCHAR(225) NOT NULL,
    email VARCHAR(225) NOT NULL,
    password VARCHAR(225) NOT NULL,
    UNIQUE KEY email(email)
    )
    ;";
$db = dbconnect();
$result = mysqli_query($db,$qry);
echo $result ? "Table Created" : "Fail to Create Table";

$qry = " CREATE TABLE IF NOT EXISTS  subjects(
    id INT(10)  NOT NULL AUTO_INCREMENT,
    name VARCHAR(225) UNIQUE NOT NULL,
    PRIMARY KEY (id)
    )
    ;";
$db = dbconnect();
$result = mysqli_query(dbconnect(),$qry);
echo $result ? "Table Created" : "Fail to Create Table";


$qry = " CREATE TABLE IF NOT EXISTS tutorials(
    id INT(10)  NOT NULL AUTO_INCREMENT,
    subject_id INT(3) NOT NULL,
    tittle VARCHAR(225) NOT NULL,
    created_by INT(3),
    PRIMARY KEY (id)
    )
    ;";
$result = mysqli_query(dbconnect(),$qry);
echo $result ? "Table Created" : "Fail to Create Table";

$qry = " CREATE TABLE IF NOT EXISTS tutorials_views(
    id INT(10) PRIMARY KEY,
    static_views INT(10) NOT NULL,
    unique_views INT(10) NOT NULL 
    );";


$result = mysqli_query(dbconnect(),$qry);
echo $result ? "Table Created" : "Fail to Create Table";

?>