<html>
    <form method="post" action="#">
  Enter Sentence:
           <input type="text" name="t1"> <br>
  Enter word:
           <input type="text" name="t2"> <br>
  Enter choice:
           <input type="text" name="t3"> <br>
    1:accept position and number of char to delete...
           <input type="text" name="t4"> 
           <input type="text" name="t5"> <br>
    2:Enter position to insert word in the sentence:
           <input type="text" name="t6"> <br> 
    3:Enter pos:
               <input type="text" name="t7">  <br>
      <input type="submit">
  </form>
</html>
<?php
    $ch=$_POST["t3"];
    $s1=$_POST["t1"];
    $s2=$_POST["t2"];

      switch($ch)
    {
       case 1: $p=$_POST["t4"];
                    $n=$_POST["t5"];
                    $s=substr_replace($s1,"cdj",$p,$n);
                    echo("Result=".$s);                      
                    break;
     case 2: $p=$_POST["t6"];
                    $s=substr_replace($s1,$s2,$p,0);
                    echo($s);
                    break;
    case 3:   $r=$_POST["t7"];
                   $s=str_replace($r,$s2,$s1);
                    echo("Result=".$s);                     
     }
?>