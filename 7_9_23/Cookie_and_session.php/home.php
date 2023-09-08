<?php

session_start();

if(isset($_REQUEST['submit'])){
    if(isset($_POST['user_name']) && isset($_POST['password']) ){
        $u_name = $_REQUEST['user_name'];
        $pass = $_REQUEST['password'];
        
        if($u_name=="Yustave" && $pass ==" 1234"){
            $_SESSION ['username'] = $u_name;
            $_SESSION ['password'] = $pass;
            header('Location:premium.php');          
        }else{
            echo "You're not valid user";
        }
        
    }else{
        echo "Personal Information need to be filled";
    }
   }

   
include 'link.php' ;


?>

<form action="" method="post" enctype="multipart/form-data">
        <h4>Register Page</h4><br>
        <input type="text" name="user_name" placeholder="User Name"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <button type="submit" name="submit">log in</button>
</form>