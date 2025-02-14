<?php
      $c1=10;
      $c2=0;
     for($n=1;$n<=100;$n++)
        {
            if($n%2==0)
                $c1++;
            else
                $c2++;
        }
       echo("<br>even number=".$c1);
        echo("<br>odd number=".$c2);
   ?>