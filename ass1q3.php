<?php  
$f = 80;  
$C = 34; 
$c = 5 / 9 * ($f - 32);  
$c = round($c, 4);  
$F = (($C * 9) /5)+32 ; 
$F = round($F,4); 
echo "The temperature in Celsius is $c <BR>";  
echo "The temperature in fahrenheit is $F"; 
?>