<?php
header("Content-type:text/plain");
// $p1 = rand(1,7);
// $p2 = rand(1,7);

// if ($p1>$p2){

//     echo "Player 1 =>". $p1 . "Player 2 =>".$p2."\r";
//     echo "Winner : Player 1"."\r";
    
// }elseif($p1<$p2){

//     echo "Player 1 =>". $p1 . "Player 2 =>".$p2."\r";
//     echo "Winner : Player 2"."\r";

// }else{
//     echo "Player 1 =>". $p1 . "Player 2 =>".$p2."\r";
//     echo "Tie"."\r";
// }

$s1=0;
$s2=0;
$tie=0;

for ($i=0; $i < 100; $i++){   
$player1 = rand(1,7);
$player2 = rand(1,7);
    if ($player1 > $player2){
        $s1++ ;
    }elseif($player1 < $player2){
        $s2++ ;
    }else{
        $tie++ ;
    }
}echo "overall score \r"." player 1 =".$s1."\rplayer 2 =".$s2."\rtie =".$tie;

?>