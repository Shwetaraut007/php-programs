<html>
 <body>
  <form method="post" action="#">
 <h1> Employee Datails</h1>
 enter name:
   <input type="text" name="t1" ><br>
enter address:
   <input type="text" name="t2" ><br>
<hr>
 <h1> Earning Deatils</h1>
enter basic sal:
   <input type="text" name="t3" ><br>
enter AD:
   <input type="text" name="t4" ><br>
enter HRD:
   <input type="text" name="t5" ><br>
 <input type="submit" value="ok">
<hr>
</form>
</body>
</html>
<?php
 $n=$_POST["t1"];
 $ad=$_POST["t2"];
 $bs=$_POST["t3"];
 $da=$_POST["t4"];
 $hra=$_POST["t5"];
  $tsal=$bs+$da+$hra;
 echo("<table border=1>");
  echo("<tr>");
   echo("<td> Emp Name:</td>");  
   echo("<td> $n</td>");
  echo("</tr>");
 echo("<tr>");
   echo("<td> Emp Address:</td>");  
   echo("<td> $ad</td>");
  echo("</tr>");
echo("<tr>");
   echo("<td> Emp basic Salary:</td>");  
   echo("<td> $bs</td>");
  echo("</tr>");
echo("<tr>");
   echo("<td> DA:</td>");  
   echo("<td> $da</td>");
  echo("</tr>");
echo("<tr>");
   echo("<td> HRD:</td>");  
   echo("<td> $hra</td>");
  echo("</tr>");
echo("<tr>");
   echo("<td> Total Salary:</td>");  
   echo("<td> $tsal</td>");
  echo("</tr>");
echo("</table>");

?>