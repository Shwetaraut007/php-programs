<html>
    <form method="post"action"#">
       enter crop name:
        <input type="text"name="t1"><br>
      enter year:
        <input type="text"name="t2"><br>
       <input type="submit"value="ok">
   </form>
</html>
<?php
        $con=mysqli_connect("localhost","root" ," ");
          if($con==false)
             die("error in connection");
          mysqli_query($con,'use cdj');
             $cname=$_post["t1"];
             $cyear=$_post["t2"];
        $k= mysqli_query($con,"select count(f_name),
                                         f_name form crop,farmer,cf
                                         where crop.c_no=cf.c_no
                                         and farmer.f_no=cf.f_no
                                         and c_name='$cname'$ year='$cyear');
        while($row=mysqli_fetch_array($k))
          {
              echo("<br>farmer count=".$row[0]);
              echo("<br>farmer name=".$row[1]);
          }
     mysqli_close($con);
?>
