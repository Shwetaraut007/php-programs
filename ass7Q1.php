<?php
   $con=mysqli_connect("localhost","root","");
       if($con==false)
          die("error in connection");
        mysqli_query($con,'use cdj');
  $k=mysqli_query($con,"select pname,no_of_share,cshare_value from
 company,person,CP
                where company.cno=CP.cno and person.pno=CP.pno
                order by pname");
 
while($row=mysqli_fetch_array($k))
  {
         echo("<br> person name=".$row[0]);
         echo("<br> no of share =".$row[1]);
         echo("<br> cshare value =".$row[2]);
    
     echo("<br>");
     

 }
mysqli_close($con);

?>