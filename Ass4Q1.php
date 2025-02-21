<?php
 //define function factorial
  function factorial($n)
   {
     $f=1;//factorial =1
for($i=1;$i<=$n;$i++)  
      {
         $f=$f*$i;
      }
   echo("<br> factorial no=".$f);//print value of factorial
 }
 //calling function

 factorial(3);
?>