<?php
header("Content-type:text/plain");

// Increment ++ , Decrement --
$x = 5;
$y = 5;

$x++;
$y--;

echo "$x,$y\r";

$x++;
$y--;

echo "$x,$y\r";

//If/eles statment

if (4==4){
    echo "Great Job!\r";
}else{
    echo "What? Ar You Dumb?\r";
}

if (4!=4){
    echo "Great Job!\r";
}else{
    echo "What? Ar You Dumb?\r";
}

//comparison operater

$a;

$a = $x == $y;

if($a){
    echo "Great Job!\r";
}else{
    echo "What? Ar You Dumb?\r";
}

$a = $x != $y;

if($a){
    echo "Great Job!\r";
}else{
    echo "What? Ar You Dumb?\r";
}


//logical operator

$name="Yustave";
$pass= 123444;

if($name == "Yustave" && $pass == 123){
    echo "YOUR ARE AUTHORIZED\r";
}else{
    echo "GET THE HELL OUT OF HERE\r";
}
 

if($name == "Yustave" || $pass == 123444){
    echo "YOUR ARE AUTHORIZED\r";
}else{
    echo "GET THE HELL OUT OF HERE\r";
}

//assiginment operator

$x=20;
echo $x, "\r";
$x+=10;
echo $x, "\r";
$x-=10;
echo $x, "\r";
$x*=2;
echo $x, "\r";
$x/=2;
echo $x, "\r";
$x%=2;
echo $x, "\r";

//conditional operator

echo $name="Yustave" ? True : False;


?>