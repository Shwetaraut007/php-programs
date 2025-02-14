<html>
     <form method="post"action="#">
         addition:
            <input type="radio"name="t1"value="1">
         subtraction:
            <input type="radio"name="t1"value="2">
        multiplication:
            <input type="radio"name="t1"value="3">
        division:
            <input type="radio"name="t1"value="4">
     </form>
</html>


<?php
      $a=10;
      $b=20;
      $ch=$_post["t1"];
      switch($ch)
       {
           case:echo("addition=".$a+$b);
                      break;
           case:echo("subtraction=".$a-$b);
                      break;
           case:echo("multiplication=".$a*$b);
                      break;
           case:echo("division=".$a/$b);
                      break;
           default:echo("invalid choice");
       }
  ?>