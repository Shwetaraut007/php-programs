<?php
  $n=29;
   while((int)$n>0)
  {
   $d=$n%10;
   $n=$n/10;
  } 
 echo("Quotient=".$d);
 echo("<br>remainder=".$n);
 ?>