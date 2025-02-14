<html>  
       <form method="POST"action="#">
           enter percentage:
             <input type="text"name="t1"><br>
             <input type="submit"value="ok">
       </form>
</html>
<?php
      $_POST["t1"];
        echo("percentage=$p<br>");
             if($p<40)
               echo("fail");  
           elseif($p<50)
                 echo("pass class");
            elseif($p<60)
                  echo("hight second class");
           elseif($p<70)
                  echo("first class");
           else
               echo(" distinction");
 ?>