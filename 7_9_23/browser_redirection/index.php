<?php
$qry = $_SERVER['QUERY_STRING'];
echo '<pre>';
print_r($_SERVER);

switch ($qry){
    case "home" : header('Location: Home.php'); break;
    case "about" : header('Location: about.php'); break;
    case "contact" : header('Location: contact.php'); break;
    default : echo 'Error 404 not found';
}


?>