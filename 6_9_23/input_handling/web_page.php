<?php

   header("Content-type:text/plain");
   if(isset($_REQUEST['submit'])){
    if(isset($_POST['user_name']) && isset($_POST['mail']) && isset($_POST['password']) 
       && isset($_POST['gender'])){
        $u_name = $_REQUEST['user_name'];
        $email = $_REQUEST['mail'];
        $pass = $_REQUEST['password'];
        echo "Personal Information \r Name =".$u_name."\r Email =".$email."\r";
        $gender = $_REQUEST['gender'];
        echo $gender."\r";
        $subject = $_REQUEST['subjects'];
        foreach($subject as $subjects){
            echo "You takes \r".count($subject)."\rthey're".$subjects;
        }
        foreach($_FILES['files']['tmp_name'] as $keys=>$y){
            echo "";
            move_uploaded_file($_FILES['files']['tmp_name'][$keys], 'upload/'.$_FILES['files']['name'][$keys]);
        }
        
    }else{
        echo "Personal Information need to be filled";
    }
   }
  
?>
 