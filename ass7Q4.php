<?php
   $con=mysqli_connect("localhost","root","");
       if($con==false)
          die("error in connection");
        mysqli_query($con,'use cdj');
  $k=mysqli_query($con,"insert into account values(1,'equity',1023)");
      if($k==true)
      {
         echo("record inserted");
     }
 mysqli_close($con);

?>