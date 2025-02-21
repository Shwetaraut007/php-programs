<html>
 <body>
  <form method="get" action="#">
 enter name:
   <input type="text" name="t1" ><br>
 enter age:
 <input type="text" name="t2" ><br>
   <input type="submit">
</form>
 </body>
</html>
 <?php
     $n=$_GET["t1"];
     $a=$_GET["t2"];
      if($a<18) 
      {
          echo(" Hello $n,you are not authorized to visit the site");
      } 
    else
     {
      echo(" Welcome $n");
     } 
 
?>