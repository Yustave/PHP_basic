<?php

function mysetcookie(){  
    setcookie('GM', 'YUSTAVE' ,time() + 3600, '/',"", 0);
}

function mygetcookie(){
    if(isset($_COOKIE['GM'])){
        echo $_COOKIE['GM'];
    }else{
        echo "Nothing Here";
    }
}

function deletecookie(){  
    setcookie('GM', 'YUSTAVE' ,time() - 3600, '/','', 0);
}

mysetcookie();
mygetcookie();
deletecookie();


?>