<?php

$str="This of is a simple example of printf";
$res1=strlen($str);
$res2=str_word_count($str);
printf("Your string lenght is  %d. You string words count: %d",$res1,$res2);

echo lcfirst($str). '<br>';
echo ucwords($str). '<br>';
echo strtoupper($str). '<br>';
echo strtolower($str). '<br>';

$str1=' Yustave ';
echo strlen($str1).'<br>';
$str2 = trim($str1);
echo strlen($str2).'<br>';

$pass = md5($str1, false);
echo $pass. "<br>";
$pass = sha1($pass);
echo $pass. "<br>";
$pass = crypt($pass,$pass);
echo $pass. "<br>";

$num = 5000000;

echo number_format($num).'<br>';
echo number_format($num, "6").'<br>';
echo number_format($num,"6",".").'<br>';
echo number_format($num,"6",".","-").'<br>';


$test1 = "1234567";
$test2 = "1234";
echo strcmp("hello","helloworldblahblah"). '<br>';

echo strpos($str, "of").'<br>';
echo strrpos($str, "of").'<br>';
echo stripos($str, "Of").'<br>';

echo substr($str, 1 , 12).'<br>';
echo substr($str, 6 , $res1).'<br>';
echo chunk_split($str, 5 , "...");


?>