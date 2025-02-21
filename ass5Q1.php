<html>
 <body>
  <form method="get" action="#">
 enter name:
   <input type="text" name="t1" ><br>
enter address:
   <input type="text" name="t2" ><br>
enter pincode:
   <input type="text" name="t3" ><br>
Gender:
          <input type="radio" name="r1" value="male" >Male
          <input type="radio" name="r1" value="female">female<br>
   <input type="submit">
</form>
 </body>
</html>
 <?php
  if(empty($_GET["t1"])&&empty($_GET["t2"])&&empty($_GET["t3"])&&empty($_GET["r1"]))  
   {
     echo(" All fields are Required.");
   }

  else
  {
     $n=$_GET["t1"];
     $add=$_GET["t2"];
    $p=$_GET["t3"];
    $g=$_GET["r1"];
   {
    echo("<br>Name=".$n);
     echo("<br> Address=".$add);
     echo("<br> Pincode=".$p);
    echo("<br> Gender=".$g);
   } 
  }
  ?>