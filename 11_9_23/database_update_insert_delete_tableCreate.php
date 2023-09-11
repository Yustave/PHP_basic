<?php

include_once("database_connect.php");

//data excution

function errorchecker(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    echo mysqli_connect_errno()>0 ?" connnection error" : "connection success";
    return $db;
}
errorchecker();

function if_errorchecker(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   if (mysqli_connect_errno() > 0){
    die("connnection error");}
    else{
        return $db;}
}
if_errorchecker();
errordebugger(if_errorchecker());

function excuteqry($qry){
    $db = dbconnect();
    $result = mysqli_query($db,$qry);
    if(mysqli_num_rows($result) > 0){
    foreach ( $result as $items){
    echo "id =". $items["id"]  . "<br>";
    echo "name =". $items["name"] . "<br>";
    echo "email =". $items["email"] . "<br>"; 
    echo "password =". $items["password"] . " <br><hr>";
   };
 }
}
$qry ='SELECT * FROM users';
excuteqry($qry);

function excute_single_qry($id){
    $db = dbconnect();
    $qry ="SELECT * FROM users where id = $id";
    $result = mysqli_query($db,$qry);
    if(mysqli_num_rows($result) > 0)
   {foreach ( $result as $items){
    echo "id =". $items["id"]  . "<br>";
    echo "name =". $items["name"] . "<br>";
    echo "email =". $items["email"] . "<br>"; 
    echo "password =". $items["password"] . " <br><hr>";
   };
    errordebugger($items);
 }
}
excute_single_qry(1);


//data insert
function data_unique_insert($name,$email,$pass){
    $qry ="SELECT * FROM users WHERE name = '$name'";
    $db = dbconnect();
    $return = mysqli_query($db,$qry);

    if(mysqli_num_rows($return) > 0) {
      echo "User Name already Exit";
    }else{
        $qry ="INSERT INTO users (name,email,password) VALUES ('$name','$email','$pass') ";
        $result = mysqli_query($db,$qry);
        echo $result > 0 ? "Data insert successful" : "Data insert fail";   
        echo mysqli_num_rows($return); 
    }    
}
data_unique_insert('Lavan','lavan@gmail.com','123');



// function multiinsert($qry) {      
//     $db = dbconnect();
//     $data_insert = mysqli_multi_query($db,$qry);
//     echo $data_insert > 0 ? "Data insert successful" : "Data insert fail";
// }
// $qry ="INSERT INTO users VALUES ('0','yu','yu@gmail.com','123','');";
// $qry .="INSERT INTO users VALUES ('0','van','van@gmail.com','123','');";
// $qry .="INSERT INTO users VALUES ('0','ki','ki@gmail.com','123', '');";
// $qry .="INSERT INTO users VALUES ('0','kekki','kekki@gmail.com','123','');";
// multiinsert($qry);



//data delete

function delete_column($id ){
    $qry = "DELETE FROM users WHERE id = $id";
    $db = dbconnect();
    $result = mysqli_query($db,$qry);
    echo $result ? "Deleted" : "fail to Delete";
}
delete_column(32);

function delete_Multicolumn($name){
    $qry = "DELETE FROM users WHERE name = '$name' ";
    $db = dbconnect();
    $result = mysqli_query($db,$qry);
    echo $result ? "Deleted" : "fail to Delete";
}
delete_Multicolumn ('kekki');

//data upgrade

function update($qry){ 
     $db =dbconnect();
     $result = mysqli_query($db,$qry);
     echo $result ? "Update Success" : "Update failed";
}
$art = 'SELECT * FROM users';
$qry = 'UPDATE users SET name="YUSTAVE" WHERE name= "yustave"';
update($qry);

$qry = 'SELECT * FROM users ORDER BY id DESC';
excuteqry($qry);
$qry ='SELECT * FROM users ORDER BY id  LIMIT 2,2 ';
excuteqry($qry);
$qry ='SELECT * FROM users ORDER BY name';
excuteqry($qry);
$qry ='SELECT DISTINCT * FROM users ORDER BY name';
excuteqry($qry);

?>