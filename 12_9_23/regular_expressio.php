<?php

$str = "Yustave La Van";
$var = "
        Yustave La Van 21,blahblah@gmail.com
        <b> blahblah@gmail.com </b>" 
        ;


$bol = preg_match("/sta/",$str); // +./,!,% can be used
echo $bol ?'true' :' false' ;
echo "<br>";



$test = preg_match("/[0-9]/", $var);
echo $test ? "true" : "false";
echo "<br>";

$check = preg_match("/a[2]/",$str); 
echo $check ? "true":"false";
echo "<br>";
// a+      => one or more a
// a*      => zero or more a
// a?      => zero or more a
// a[2,3]  => 2 or 3 a in consitutive
// a[2,]  => 2 or more a in consitutive

$result = preg_replace('/[[:alpha:]]/',"12",$var);
echo $result. "<br>";

$result = preg_replace('/[[:digit:]]/',"Yustave",$var);
echo $result. "<br>";

//alnum  => both alpha and digit
//space  => blank space


$result =preg_match("/s.t/",$var);  // a.b => is there b following a
echo $result ?'true' :' false' ;
echo "<br>";
$result =preg_match("/^.(2)/",$var); //at least 2 charaters
echo $result ?'true' :' false' ;
echo "<br>";
$result =preg_match("/<b>(.*)<\/b>/",$var); // zero or more in <> </> tags
echo $result ?'true' :' false' ;
echo "<br>";
$result =preg_match("/Yus(ppo)*/",$var);// a(b)* => is there 0 or more b following a
echo $result ?'true' :' false' ;
echo "<br>";
$result =preg_match("/ \D /",$var);//  \d => digit 
echo $result ?'true' :' false' ;  //   \D => non=digits
echo "<br>";
$result =preg_match("/ \s /",$var);// \s => space
echo $result ?'true' :' false' ;   // \S => non=space
echo "<br>";
$result =preg_match("/ \w /",$var); // \w - word charaters
echo $result ?'true' :' false' ;    // \W -non-word charaters
echo "<br>";

// ^$ = empty string
// a\wb => word charater between a & b
// incase_sensitive => add i after second / and before second "
// . => any charater
// \. => .
// + => one or more
$email = "lavanyustave@gamil.com";

$check_email = preg_match("/^[a-zA-Z]+@[a-z]+\.+[a-z]{3}$/",$email);
echo $check_email  ? 'true' :' false' ;

               // preg match replace
$test_replace = "Valorant World's Championship (Ocenia Reigon) 2022";

$ary = preg_replace(
           array('/ocenia /i','/[0-9]+/'),
           array('SEA',"2023"),
           $test_replace
);
echo  "<br>" . $ary . "<br>";

               // preg match split

$page_split = preg_split("/[\s,]/",$var,20,PREG_SPLIT_NO_EMPTY);
echo "<pre>". print_r($page_split,true) . "</pre>";


echo "<pre>". print_r(preg_split("/[\s]/",$str,20,PREG_SPLIT_OFFSET_CAPTURE),true) . "</pre>";

// ([ ]) = grouping

$test_group = "Yustave.";
$test_result = preg_match('/[^A-Z]/',$test_group);
echo $test_result  ? 'true' :' false' ; 


// preg match all

$text = "the gold ratio is 1:681";
preg_match_all('/(\d+:+\d+)/',$text,$matches,PREG_SET_ORDER);
echo "<pre>". print_r($matches,true) . "</pre>";

//preg quote
echo $var . "<br>";
echo preg_quote($var) . "<br>";

//LOOK AROUND

$eps = "ABC";
$bol = preg_match('/A(?=C)/',$eps);//positive look ahead
// '/(?<=A)B/   positive look behind
echo $bol ? "true":"false";
echo "<br>";

$bol = preg_match('/A(?!C)/',$eps);
//'/A(?<!C)/'    Negative look behind
echo $bol ? "true":"false";
echo "<br>";

//password filtering
$password = 'Yustsave1avan';

$bol = preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/',$password);
echo $bol ? "true":"false";
echo "<br>";
?>