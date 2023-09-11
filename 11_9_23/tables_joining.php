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
// $users = json_decode(file_get_contents("users.json"));
// foreach($users as $user){
//     $pass = passGen($user -> password);
//     $qry = "INSERT INTO users VALUES ($user->id,'$user->name',$user->creator,
//            '$user->email','$pass')";
//     mysqli_query(dbconnect(),$qry);
// }


// $subjects = json_decode(file_get_contents("subjects.json"));
// foreach($subjects as $subject){
//     $qry = "INSERT INTO subjects VALUES ($subject->id,'$subject->name')";
//     mysqli_query(dbconnect(),$qry);
// }

//          Tuto  database

// $qry = 'SELECT * FROM subjects';
// $db =  dbconnect();
// $result = mysqli_query($db,$qry);
//$tutorials= json_decode(file_get_contents("tutorials.json"));

// foreach($tutorials as $tutorial){
//     $qry = "SELECT name FROM subjects WHERE id=$tutorial->subject_id";
//     $result = mysqli_query( dbconnect(),$qry);
//     $name= "";

//     foreach($result as $rows){
//         $name= $rows["name"];
//     }

//     $subjectid =$tutorial->subject_id;
//     $creator=$tutorial->creator_id;
//     $t=0;
//     for($i=$tutorial->start_id;$i <= $tutorial->end_id;$i++){
//         $title = $name."".++$t;
//         $qry="INSERT INTO tutorials (subject_id,tittle,created_by)VALUES($subjectid,'$title',$creator);";
//         mysqli_query(dbconnect(),$qry);
//     }  
// }



//                  TutoViews database

// $qry ='SELECT * FROM tutorials';
// $db = dbconnect();
// $result = mysqli_query($db,$qry);
// foreach($result as $items){ 
//     //  echo $items["id"];
//      $id = $items["id"];
     
//      $static_views = mt_rand(100,1000);
//      $unique_views = mt_rand(10,100);

//     //  echo $static_views . $unique_views;
//      $qry = "INSERT INTO tutorials_views VALUES ( $id,$static_views,$unique_views);";
//      mysqli_query(dbconnect(),$qry);
// }
 
 ?>