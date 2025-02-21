<html>
   <body>
       <form method="post" action="#">
             Enter the String :
               <input type="Text" name="t1"> <br>
             <input type="submit">
        </from>
    </body>
</html>

<?php
    $s=$_POST["t1"];
  echo("<br>Print  first 5 words:");
    $a=explode(" ",$s);
   for($i=0;$i<5;$i++)
    echo($a[$i]." ");
  
   echo("<br> Lower case=".strtolower($s));
   echo("<br> Title case=".ucwords($s));

   $s1=str_pad($s,10,"*",STR_PAD_BOTH);
  echo("<br> PAdding String=".$s1);

  $s1=ltrim($s);
  echo("<br> After Removing leading spaces:".$s1);

  $s1=strrev($s);
  echo("<br> Reverse String=".$s1);

?>