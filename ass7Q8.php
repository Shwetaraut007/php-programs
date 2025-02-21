<html>
  <form method="post" action="#">
    enter crop name:
   <input type="text" name="t1"><br>
    enter year:
   <input type="text" name="t2"><br>
   <input type="submit" value="submit"><br>
  </form>
</html>
 
<?php
  $con=mysqli_connect("localhost","root","");
   if($con==false)
    die("error in connection");

  mysqli_query($con,"use cdj");

   $cname=$_POST["t1"];
   $cyear=$_POST["t2"];


  $k=mysqli_query($con,"select count(f_name),f_name from crop,farmer,CF
 where crop.c_no=CF.c_no
 and farmer.f_no=Cf.f_no
 and c_name='$cname' and year='$cyear'");
    

while($row=mysqli_fetch_array($k))

{
    echo("<br> farmer count=".$row[0]);
    echo("<br> farmer name=".$row[1]);

}
    
mysqli_close($con);



?>
