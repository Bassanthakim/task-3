<?php
$day = date('1');
echo "welcome $day <br>";

$x = 5;            

echo $x;              //is integer 5
echo "<br />";

echo $x+++$x++;      //$x+$x , $x+1 ,  $x+1(post increment)
echo "<br />";        //(5+(5+1))        (6+1)next echo

echo $x;                //$x++ +1=6+1=7
echo "<br />";

echo $x---$x--;         //$x-$x , $x-1 , $x-1(post-decrement)
echo "<br />";          // 7-(7-1),     (6-1)next echo

echo $x;                //$x-- -1=6-1=5
echo "<br />"; 

$a = '1';         //string(2)"21"
$b = &$a;         //21
$b = "2$b";        //21


echo $a ."<br>" .  $b ;      //($a=21) = ($b=21) //used to create a new variable as an alias to an existing spot in memory.

?>