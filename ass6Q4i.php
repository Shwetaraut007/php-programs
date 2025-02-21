<?php
    session_start();
    $name=$_POST["t1"];
    $add=$_POST["t2"];
    $bir=$_POST["t3"];
   $ph=$_POST["t4"];

 $_SESSION["name"]=$name;
 $_SESSION["address"]=$add;
 $_SESSION["birth"]=$bir;
 $_SESSION["phone"]=$ph;

?>
<html>
 <body>
<h1>Health Details:</h1>
  <form method="post" action="ass6Q8ii.php">
      Medicare No:
         <input type="text" name="t5" ><br>
       Health Fund:    
   <input type="text" name="t6"><br>
      Critical Info:      
<input type="text" name="t7"><br>
        <input type="submit"  value="next"><br>
 </form>
</body>
 </html>