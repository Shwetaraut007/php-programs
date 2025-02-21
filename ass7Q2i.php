<html>
  <form method="post" action="#">
    enter date:
   <input type="text" name="t1"><br>
   <input type="submit" value="submit"><br>
  </form>
</html>
 
<?php
  $con=mysqli_connect("localhost","root","");
   if($con==false)
    die("error in connection");
  mysqli_query($con,"use cdj");
   $d=$_POST["t1"];
  $k=mysqli_query($con,"select count(fare)from ticket where booking_date='$d'");
    

while($row=mysqli_fetch_array($k))

{
    echo("<br> fare=".$row[0]);
}
    
mysqli_close($con);



?>
