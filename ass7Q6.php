<html>
  <form method="post" action="#">
    enter project name:
   <input type="text" name="t1"><br>
   <input type="submit" value="submit"><br>
  </form>
</html>


<?php
   $con=mysqli_connect("localhost","root","");
       if($con==false)
          die("error in connection");

        mysqli_query($con,"use cdj");

   $pn=$_POST["t1"];

$k=mysqli_query($con,"select pname,ename,duration from emp,project,EP
  where emp.eno=EP.eno
 and project.pno=EP.pno
 and pname='$pn'");

 while($row=mysqli_fetch_array($k))
 {
   echo("<br> project name=".$row[0]); 
   echo("<br> emp name=".$row[1]); 
  echo("<br> duration=".$row[2]); 

}

 mysqli_close($con);

?>