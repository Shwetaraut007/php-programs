<?php
    $a=10;
    $b=20;
    $t=30; 
    {
        $a=$b;
        $b=$t;
        $t=$a;
     }
     
     echo("<br>swap=".$a);
     echo("<br>swap=".$b);
     echo("<br>swap=".$t);
 ?>