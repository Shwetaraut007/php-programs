<html>
 <body>
  <form method="get" action="#">
Gender:<br>
          <input type="radio" name="r1" value="male" >Male<br>
          <input type="radio" name="r1" value="female">female<br>
 Select Class:<br>
      <input type="radio" name="t1" value="FY" >FY<br>
       <input type="radio" name="t1" value="SY" >SY<br>
       <input type="radio" name="t1" value="TY" >TY<br>
   <input type="submit">
</form>
 </body>
</html>
<?php
 if(isset($_GET["r1"]))
   {
     $g=$_GET["r1"];
       echo("<br> Gender=".$g);
     }
 else
     echo("Select gender"); 
if(isset($_GET["t1"]))
   {
     $c=$_GET["t1"];
       echo("<br> Class=".$c);
     }
 else
 echo("Select calss")
?>