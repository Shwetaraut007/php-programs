<html>  
       <form method="POST"action="#">
           enter percentage:
             <input type="text"name="t1"><br>
             <input type="submit"value="ok">
       </form>
</html>


<?php
      $P=$_POST["t1"];
        echo("percentage=$P<br>");

            if($P<40)
               echo("fail");  
 
                 elseif($P<50)
                      echo("pass class");

                elseif($P<60)
                      echo("higher second class");

                elseif($P<70)
                      echo("first class");
            else
                echo(" distinction");
 ?>