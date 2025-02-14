<?php
     function evenodd()
      {
         echo("<br>even nos:");
          for($i=1;$i<=50;$i++)
             {
                 if($i%2==0)
                    echo("$i");
             }
         echo("<br>odd nos:");
          for($i=1;$i<=50;$i++)
             {
                 if($i%2==1)
                    echo("$i");
             }
      }
      evenodd();
 ?>