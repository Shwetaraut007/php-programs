<?php
 session_start();
 
  $n=$_SESSION["name"];
   $q=$_SESSION["quantity"];
    $s=$_SESSION["sold"];

 $pn=$_POST["t1"];
 $d=$_POST["t2"];
 $sa=$_POST["t3"];

 echo("<h2> highest Sold product Details</h2>");
 echo("<table border=1>");
   echo("<tr>");
    echo("<td> product name:</td>");
   echo("<td> $n</td>");
  echo("</tr>");

   echo("<tr>");
    echo("<td> Total Quantity:</td>");
   echo("<td> $q</td>");
    echo("</tr>");

  echo("<tr>");
    echo("<td> Total sold:</td>");
   echo("<td> $s</td>");
  echo("</tr>");
echo("</table>");

 echo("<h2> Latest Sales product Details</h2>");
    echo("<table border=1>");
  echo("<tr>");
       echo("<td> product name:</td>");
   echo("<td> $pn </td>");
  echo("</tr>");

   echo("<tr>");
    echo("<td> Date:</td>");
   echo("<td> $d </td>");
    echo("</tr>");

  echo("<tr>");
    echo("<td> Total sale:</td>");
   echo("<td> $sa </td>");
  echo("</tr>");
echo("</table>");
?>