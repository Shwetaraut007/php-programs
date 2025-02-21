<?php
  $con=mysqli_connect("localhost","root","");
   if($con==false)
    die("connection in error");
   mysqli_query($con,'use cdj');

 $k=mysqli_query($con,"select ticket.* from customer,ticket
  where customer.cno=ticket.cno
  order by cname");


while($row=mysqli_fetch_array($k))

{
    echo("<br> Tno=".$row[0]);
    echo("<br> Booking book=".$row[1]);
    echo("<br> fare=".$row[2]);
    echo("<br> Traveling date=".$row[3]);
     echo("<br>");

  }
      
  mysqli_close($con);


?>