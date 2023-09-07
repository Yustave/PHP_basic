<?php

if(isset($_SESSION['username'])){
    header('Location: premiun.php'); 
}else{
    header('Location: home.php'); 
}
include 'link.php' ;

?>