<?php
    function maximum($a,$b,$c)
      {
          if($a>$b && $a>$c)
           return $a;
         else if($b>$a && $b>$c)
           return $b;
        else if($c>$a && $c>$b)
           return $c;
    }
   echo("<br> max no=".maximum(44,66,22));
 ?>