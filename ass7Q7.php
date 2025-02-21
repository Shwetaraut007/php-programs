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

$k=mysqli_query($con,"select train.*,pname from train,passenger,TP
 where train.tno=TP.tno
  and passenger.pno=TP.pno
  and '$d'=(select max('$d')from TP)");

 while($row=mysqli_fetch_array($k))
 {
   echo("<br> train no=".$row[0]); 
   echo("<br> train name=".$row[1]);
     echo("<br>pname name=".$row[2]);

 echo("<br>"); 
}
 mysqli_close($con);

?>